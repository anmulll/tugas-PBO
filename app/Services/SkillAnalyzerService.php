<?php
// Service untuk analisis skill matching

namespace App\Services;

use App\Repositories\LowonganRepository;
use App\Repositories\RekomendasiKursusRepository;

class SkillAnalyzerService
{
    public function __construct(
        private LowonganRepository $lowonganRepository,
        private RekomendasiKursusRepository $kursusRepository
    ) {}

    public function analisaKesesuaian(array $userSkills, string $idLowongan): array
    {
        $lowongan = $this->lowonganRepository->getById($idLowongan);
        $persentase = $lowongan->hitungKesesuaian($userSkills);
        $skillKurang = $this->getSkillKurang($userSkills, $lowongan->skill_dibutuhkan);

        return [
            'persentase_kesesuaian' => round($persentase, 2),
            'skill_sesuai' => $this->getSkillSesuai($userSkills, $lowongan->skill_dibutuhkan),
            'skill_kurang' => $skillKurang,
        ];
    }

    public function rekomendasiKursus(array $skillKurang): array
    {
        $rekomendasi = [];
        foreach ($skillKurang as $skill) {
            $kursus = $this->kursusRepository->getBySkill($skill);
            if ($kursus->isNotEmpty()) {
                $rekomendasi[$skill] = $kursus;
            }
        }
        return $rekomendasi;
    }

    private function getSkillSesuai(array $userSkills, array $requiredSkills): array
    {
        return array_values(array_intersect(
            array_map('strtolower', $userSkills),
            array_map('strtolower', $requiredSkills)
        ));
    }

    private function getSkillKurang(array $userSkills, array $requiredSkills): array
    {
        $userSkillsLower = array_map('strtolower', $userSkills);
        $requiredSkillsLower = array_map('strtolower', $requiredSkills);
        return array_values(array_diff($requiredSkillsLower, $userSkillsLower));
    }
}