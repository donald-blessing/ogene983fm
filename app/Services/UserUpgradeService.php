<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Specialisation\Specialisation;
use App\Models\User;
use Illuminate\Support\Facades\View;

class UserUpgradeService
{
    /**
     * Get the forms required for user upgrade based on the type.
     */
    public function getUpgradeForms(User $user, string $upgradeType): array
    {
        $forms = [];

        if ($upgradeType === 'expert') {
            $forms = $this->getExpertForms($user);
        } elseif ($upgradeType === 'corporate') {
            $forms = $this->getCorporateForms($user);
        }

        $forms[] = [
            'title' => 'Social Profiles',
            'subTitle' => 'Your presence on the social network',
            'form' => $this->renderView('site.dashboard.user.socialMediaHandle.create', ['user' => $user]),
        ];

        return $forms;
    }

    protected function getExpertForms(User $user): array
    {
        return [
            [
                'title' => 'Qualification',
                'subTitle' => 'Enter your qualification',
                'form' => $this->renderView('site.dashboard.user.qualification.create', ['user' => $user]),
            ],
            [
                'title' => 'Specialisation',
                'subTitle' => 'Choose one or more specialisations you have',
                'form' => $this->renderView('site.dashboard.user.specialisation.create', [
                    'specialisations' => Specialisation::all(),
                    'user' => $user,
                ]),
            ],
            [
                'title' => 'Journals',
                'subTitle' => 'Upload at least two published journals',
                'form' => $this->renderView('site.dashboard.user.journal.create', ['user' => $user]),
            ],
            [
                'title' => 'Address',
                'subTitle' => 'Contact address',
                'form' => $this->renderView('site.dashboard.user.address.create', ['user' => $user]),
            ],
            [
                'title' => 'Registration',
                'subTitle' => 'Pharmacy registration info',
                'form' => $this->renderView('site.dashboard.user.registration.create', ['user' => $user]),
            ],
            [
                'title' => 'License',
                'subTitle' => 'Pharmacy license info',
                'form' => $this->renderView('site.dashboard.user.license.create', ['user' => $user]),
            ],
        ];
    }

    protected function getCorporateForms(User $user): array
    {
        return [
            [
                'title' => 'Company',
                'subTitle' => 'Select type of company',
                'form' => $this->renderView('site.dashboard.user.company-type.create', ['user' => $user]),
            ],
            [
                'title' => 'Address',
                'subTitle' => 'Contact address',
                'form' => $this->renderView('site.dashboard.user.address.create', ['user' => $user]),
            ],
            [
                'title' => 'Registration',
                'subTitle' => 'Pharmacy registration info',
                'form' => $this->renderView('site.dashboard.user.registration.create', ['user' => $user]),
            ],
            [
                'title' => 'License',
                'subTitle' => 'Pharmacy license info',
                'form' => $this->renderView('site.dashboard.user.license.create', ['user' => $user]),
            ],
            [
                'title' => 'Pharmacists',
                'subTitle' => 'Details of Pharmacist director and Pharmacist superintendent',
                'form' => $this->renderView('site.dashboard.user.pharmacists.create', ['user' => $user]),
            ],
        ];
    }

    protected function renderView(string $view, array $data): string
    {
        if (View::exists($view)) {
            return View::make($view, $data)->render();
        }

        return '<!-- View '.$view.' not found -->';
    }
}
