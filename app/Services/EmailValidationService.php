<?php
// Service untuk validasi email berdasarkan role

namespace App\Services;

class EmailValidationService
{
    private const ROLE_PENGGUNA = 'pengguna';
    private const ROLE_COMPANY = 'company';
    private const GMAIL_DOMAIN = '@gmail.com';
    private const COMPANY_DOMAIN = '@company.com';

    public function validate(string $email, string $role): bool
    {
        return match($role) {
            self::ROLE_PENGGUNA => $this->isGmailEmail($email),
            self::ROLE_COMPANY => $this->isCompanyEmail($email),
            default => false,
        };
    }

    private function isGmailEmail(string $email): bool
    {
        return str_ends_with(strtolower($email), self::GMAIL_DOMAIN);
    }

    private function isCompanyEmail(string $email): bool
    {
        return str_ends_with(strtolower($email), self::COMPANY_DOMAIN);
    }
}