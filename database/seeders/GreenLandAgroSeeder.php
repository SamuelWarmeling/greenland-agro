<?php

namespace Database\Seeders;

use App\Models\Package;
use App\Models\PaymentMethod;
use App\Models\Rebate;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class GreenLandAgroSeeder extends Seeder
{
    public function run()
    {
        Setting::updateOrCreate(
            ['id' => 1],
            [
                'withdraw_charge' => 10,
                'minimum_withdraw' => 20,
                'maximum_withdraw' => 50000,
                'w_time_status' => 'active',
                'checkin' => 0.50,
                'registration_bonus' => 0,
                'total_member_register_reword' => 0,
                'total_member_register_reword_amount' => 0,
                'telegram' => 'https://t.me/greenlandagro',
            ]
        );

        Rebate::updateOrCreate(
            ['id' => 1],
            [
                'interest_commission1' => 5,
                'interest_commission2' => 1,
                'interest_commission3' => 1,
            ]
        );

        PaymentMethod::updateOrCreate(
            ['id' => 1],
            [
                'name' => 'PIX',
                'photo' => '/public/assets/img/greenland-agro-logo.jpeg',
                'address' => 'CHAVE PIX GREENLAND AGRO',
                'status' => 'active',
            ]
        );

        $plans = [
            ['name' => 'Semente', 'label' => 'VIP 1', 'tab' => 'vip', 'price' => 40, 'validity' => 40, 'photo' => '/public/upload/package/gla/safrinha.jpeg', 'commission_with_avg_amount' => 240],
            ['name' => 'Broto', 'label' => 'VIP 1', 'tab' => 'vip', 'price' => 80, 'validity' => 40, 'photo' => '/public/upload/package/gla/cultivo.jpeg', 'commission_with_avg_amount' => 480],
            ['name' => 'Cultivo', 'label' => 'VIP 1', 'tab' => 'vip', 'price' => 120, 'validity' => 40, 'commission_with_avg_amount' => 720, 'photo' => '/public/upload/package/gla/broto.jpeg'],
            ['name' => 'Safrinha', 'label' => 'VIP 1', 'tab' => 'vip', 'price' => 240, 'validity' => 40, 'commission_with_avg_amount' => 1440, 'photo' => '/public/upload/package/gla/semente.jpeg'],
            ['name' => 'Safra', 'label' => 'VIP 1', 'tab' => 'vip', 'price' => 480, 'validity' => 40, 'commission_with_avg_amount' => 2880, 'photo' => '/public/upload/package/gla/colheita-premium.jpeg'],
            ['name' => 'Colheita Premium', 'label' => 'VIP 1', 'tab' => 'vip', 'price' => 960, 'validity' => 40, 'commission_with_avg_amount' => 5760, 'photo' => '/public/upload/package/gla/safra.jpeg'],
            ['name' => 'Agro Prime', 'label' => 'VIP 1', 'tab' => 'vip', 'price' => 1920, 'validity' => 40, 'commission_with_avg_amount' => 11520, 'photo' => '/public/upload/package/gla/agro-prime.jpeg'],
            ['name' => 'Semente', 'label' => 'VIP 1', 'tab' => 'fixed', 'price' => 40, 'validity' => 3, 'commission_with_avg_amount' => 60],
            ['name' => 'Germinacao', 'label' => 'VIP 2', 'tab' => 'fixed', 'price' => 120, 'validity' => 5, 'commission_with_avg_amount' => 150],
            ['name' => 'Desenvolvimento', 'label' => 'VIP 3', 'tab' => 'fixed', 'price' => 240, 'validity' => 7, 'commission_with_avg_amount' => 320],
            ['name' => 'Producao', 'label' => 'VIP 4', 'tab' => 'fixed', 'price' => 480, 'validity' => 10, 'commission_with_avg_amount' => 700],
            ['name' => 'Alta Producao', 'label' => 'VIP 5', 'tab' => 'fixed', 'price' => 960, 'validity' => 12, 'commission_with_avg_amount' => 1500],
            ['name' => 'Escala Agricola', 'label' => 'VIP 6', 'tab' => 'fixed', 'price' => 1920, 'validity' => 15, 'commission_with_avg_amount' => 3200],
            ['name' => 'Semente', 'label' => 'VIP 1', 'tab' => 'event', 'price' => 30, 'validity' => 1, 'commission_with_avg_amount' => 45],
            ['name' => 'Plantio', 'label' => 'VIP 2', 'tab' => 'event', 'price' => 60, 'validity' => 1, 'commission_with_avg_amount' => 90],
            ['name' => 'Lavoura', 'label' => 'VIP 3', 'tab' => 'event', 'price' => 120, 'validity' => 1, 'commission_with_avg_amount' => 180],
            ['name' => 'Safrinha', 'label' => 'VIP 4', 'tab' => 'event', 'price' => 240, 'validity' => 1, 'commission_with_avg_amount' => 360],
            ['name' => 'Safra', 'label' => 'VIP 5', 'tab' => 'event', 'price' => 480, 'validity' => 1, 'commission_with_avg_amount' => 720],
            ['name' => 'Mega Safra', 'label' => 'VIP 6', 'tab' => 'event', 'price' => 960, 'validity' => 1, 'commission_with_avg_amount' => 1440],
            ['name' => 'Start Agro', 'label' => 'VIP 1', 'tab' => 'event', 'price' => 30, 'validity' => 1, 'commission_with_avg_amount' => 45],
            ['name' => 'Base Produtiva', 'label' => 'VIP 2', 'tab' => 'event', 'price' => 80, 'validity' => 2, 'commission_with_avg_amount' => 120],
            ['name' => 'Expansao Agricola', 'label' => 'VIP 3', 'tab' => 'event', 'price' => 160, 'validity' => 3, 'commission_with_avg_amount' => 260],
            ['name' => 'Rendimento Ativo', 'label' => 'VIP 4', 'tab' => 'event', 'price' => 320, 'validity' => 4, 'commission_with_avg_amount' => 560],
            ['name' => 'Alta Rentabilidade', 'label' => 'VIP 5', 'tab' => 'event', 'price' => 640, 'validity' => 5, 'commission_with_avg_amount' => 1200],
            ['name' => 'Elite Agro', 'label' => 'VIP 6', 'tab' => 'event', 'price' => 1280, 'validity' => 6, 'commission_with_avg_amount' => 2600],
        ];

        foreach ($plans as $plan) {
            $package = Package::firstOrNew([
                'tab' => $plan['tab'],
                'price' => $plan['price'],
                'validity' => $plan['validity'],
            ]);

            $package->fill([
                'name' => $plan['name'],
                'label' => $plan['label'],
                'tab' => $plan['tab'],
                'price' => $plan['price'],
                'validity' => $plan['validity'],
                'commission_with_avg_amount' => $plan['commission_with_avg_amount'],
                'package_id' => null,
                'ref1' => 20,
                'ref2' => 7,
                'ref3' => 1,
                'status' => 'active',
                'is_default' => '0',
                'desc' => 'Plano GreenLand Agro configurado para a estrategia GLA.',
            ]);

            if (! empty($plan['photo'])) {
                $package->photo = $plan['photo'];
            } elseif (! $package->exists && empty($package->photo)) {
                $package->photo = '/public/assets/img/greenland-agro-logo.jpeg';
            }

            $package->save();
        }
    }
}
