<?php


use App\Models\Package;
use App\Models\Purchase;
use Stichoza\GoogleTranslate\GoogleTranslate;

if (! function_exists('main_root')) {
    function main_root()
    {
        return "public";
    }
}

if (! function_exists('admin_file_root')) {
    function admin_file_root()
    {
        return "public/admin";
    }
}

if (! function_exists('frontend_file_root')) {
    function frontend_file_root()
    {
        return "public/frontend";
    }
}

if (! function_exists('admin')) {
    function admin()
    {
        return \Illuminate\Support\Facades\Auth::guard('admin');
    }
}

if (! function_exists('price')) {
    function price($price)
    {
        return currency() . number_format((float) $price, 2, ',', '.');
    }
}

if (! function_exists('currency')) {
    function currency()
    {
        return 'R$ ';
    }
}

if (! function_exists('user')) {
    function user()
    {
        return \Illuminate\Support\Facades\Auth::user();
    }
}

if (! function_exists('not_found_img')) {
    function not_found_img()
    {
        return '/public/common/img/404.png';
    }
}

if (! function_exists('success_redirect')) {
    function success_redirect($route, $type)
    {
        return redirect()->route($route)->with('success', "Item $type Successfully.");
    }
}

if (! function_exists('error_redirect')) {
    function error_redirect($route, $type, $message)
    {
        return redirect()->route($route)->with($type, $message);
    }
}


if (! function_exists('uploadImage')) {
    function uploadImage($true_II_false_normal ,$request ,$input, $dir, $w=null, $h=null, $oldInput=null)
    {
        $path = public_path(str_replace('/public/', '', $oldInput));
        if ($request->hasFile($input)) {
            if (File::exists($path)){
                File::delete($path);
            }
        }

        if ($request->hasFile($input)) {
            $file = $request->file($input);
            $namewithextension = $file->getClientOriginalName(); //Name with extension 'filename.jpg'
            $name = explode('.', $namewithextension)[0]; // Filename 'filename'
            $extension = $file->getClientOriginalExtension();
            $file_name = time(). Str::random(3) . '.' . $extension;

            if ($true_II_false_normal){
                $destinationPath = public_path($dir);
                $imgFile = Image::make($request->file($input)->getRealPath());
                $imgFile->resize($w, $h, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath.'/'.$file_name);
            }else{
                $request->file($input)->move(public_path($dir), $file_name);
            }

            \Artisan::call('view:clear');
            \Artisan::call('cache:clear');
            $path = '/public/'. $dir . $file_name;
            return $path;
        }
        return null;
    }
}

if (! function_exists('deleteImage')) {
    function deleteImage($oldInput)
    {
        $path = public_path(str_replace('/public/', '', $oldInput));
        if (File::exists($path)){
            File::delete($path);
        }
        return true;
    }
}

if (! function_exists('view_image')) {
    function view_image($imageName)
    {
        $mainUrl = env('IMAGE_VIEW_SET');
        if ($mainUrl == null){
            $mainUrl = url('');
        }
        return $mainUrl . $imageName;
    }
}


if (! function_exists('createSlug')){
    function createSlug($table_model, $title, $id = 0)
    {
        $slug = Str::slug($title);
        $allSlugs = getRelatedSlugs($table_model, $slug, $id);
        if (!$allSlugs->contains('slug', $slug)) {
            return $slug;
        }
        // Just append numbers like a savage until we find not used.
        for ($i = 1; $i <= 10; $i++) {
            $newSlug = $slug . '-' . $i;
            if (!$allSlugs->contains('slug', $newSlug)) {
                return $newSlug;
            }
        }
        throw new \Exception('Can not create a unique slug');
    }
}
//$object->slug = Helper::createSlug('\Category',$request->name);

if (! function_exists('getRelatedSlugs')){
    function getRelatedSlugs($table_model, $slug, $id = 0)
    {
        $model_name = "App\Models" . $table_model;


        $data = $model_name::where('slug', 'like', $slug . '%')
            ->where('id', '<>', $id)
            ->get();
        return $data;
    }
}


if(! function_exists('setting')){
    function setting($column)
    {
        $setting = \App\Models\Setting::select('id', "$column")->first();
        if ($setting){
            $column = $setting->{$column};
        }else{
            $column = "Data Is Empty";
        }
        return $column;
    }
}


if(! function_exists('my_vips')){
    function my_vips()
    {
        $purchaseVips = Purchase::where('user_id', \auth()->id())->orderByDesc('id')->get();
        $vids = [];
        foreach ($purchaseVips as $el)
        {
            array_push($vids, $el->package_id );
        }
        return $vids;
    }
}

if(! function_exists('my_active_vips')){
    function my_active_vips()
    {
        $purchaseVips = Purchase::where('user_id', \auth()->id())->where('status', 'active')->orderByDesc('id')->get();
        $vids = [];
        foreach ($purchaseVips as $el)
        {
            array_push($vids, $el->package_id );
        }
        return $vids;
    }
}


if(! function_exists('translator')){
    function translator($text)
    {
        return $text;
        $text = GoogleTranslate::trans($text, app()->getLocale());
        return $text;
    }
}
if(! function_exists('registration_bonus')){
    function registration_bonus()
    {
        return 25;
    }
}
if(! function_exists('registration_reword')){
    function registration_reword()
    {
        return 15;
    }
}

if (! function_exists('gla_vip_thresholds')) {
    function gla_vip_thresholds()
    {
        return [
            6 => 4800,
            5 => 2400,
            4 => 1200,
            3 => 600,
            2 => 200,
            1 => 40,
        ];
    }
}

if (! function_exists('gla_vip_level_from_total')) {
    function gla_vip_level_from_total($totalInvestment)
    {
        $amount = (float) $totalInvestment;

        foreach (gla_vip_thresholds() as $level => $threshold) {
            if ($amount >= $threshold) {
                return $level;
            }
        }

        return 0;
    }
}

if (! function_exists('gla_user_total_investment')) {
    function gla_user_total_investment($userId = null)
    {
        $userId = $userId ?: auth()->id();

        if (! $userId) {
            return 0;
        }

        return (float) Purchase::where('user_id', $userId)->sum('amount');
    }
}

if (! function_exists('gla_user_vip_level')) {
    function gla_user_vip_level($user = null)
    {
        $userId = is_object($user) ? $user->id : $user;

        return gla_vip_level_from_total(gla_user_total_investment($userId));
    }
}

if (! function_exists('gla_package_level')) {
    function gla_package_level($package)
    {
        if (! $package) {
            return 0;
        }

        if (($package->tab ?? null) === 'vip') {
            return 1;
        }

        $source = trim(($package->label ?? '') . ' ' . ($package->name ?? ''));

        if (preg_match('/(\d+)/', $source, $matches)) {
            return (int) $matches[1];
        }

        return 1;
    }
}

if (! function_exists('gla_package_type_label')) {
    function gla_package_type_label($package)
    {
        return match ($package->tab ?? null) {
            'vip' => 'Plano Base',
            'fixed' => 'Ciclo VIP',
            'event' => 'Evento Relampago',
            default => 'Plano',
        };
    }
}

if (! function_exists('gla_referral_rates')) {
    function gla_referral_rates($isFirstPurchase = false)
    {
        if ($isFirstPurchase) {
            return ['first' => 20, 'second' => 7, 'third' => 1];
        }

        return ['first' => 5, 'second' => 1, 'third' => 1];
    }
}

if (! function_exists('gla_checkin_amount')) {
    function gla_checkin_amount()
    {
        $amount = (float) setting('checkin');

        return $amount > 0 ? $amount : 0.50;
    }
}

if (! function_exists('gla_withdraw_minimum')) {
    function gla_withdraw_minimum()
    {
        return 20.00;
    }
}

if (! function_exists('gla_format_phone')) {
    function gla_format_phone($phone)
    {
        $digits = preg_replace('/\D+/', '', (string) $phone);

        if (strlen($digits) === 11) {
            return preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) $2-$3', $digits);
        }

        if (strlen($digits) === 10) {
            return preg_replace('/(\d{2})(\d{4})(\d{4})/', '($1) $2-$3', $digits);
        }

        return $phone ?: '--';
    }
}

if (! function_exists('gla_level_label')) {
    function gla_level_label($level)
    {
        $level = (int) $level;

        return 'Nivel ' . $level;
    }
}

if (! function_exists('gla_next_threshold')) {
    function gla_next_threshold($totalInvestment)
    {
        $amount = (float) $totalInvestment;

        foreach (array_reverse(gla_vip_thresholds(), true) as $level => $threshold) {
            if ($amount < $threshold) {
                return [
                    'level' => $level,
                    'threshold' => $threshold,
                ];
            }
        }

        return null;
    }
}

if (! function_exists('gla_progress_to_next_level')) {
    function gla_progress_to_next_level($totalInvestment)
    {
        $amount = (float) $totalInvestment;
        $currentLevel = gla_vip_level_from_total($amount);
        $currentThreshold = gla_vip_thresholds()[$currentLevel] ?? 0;
        $next = gla_next_threshold($amount);

        if (! $next) {
            return 100;
        }

        $span = max($next['threshold'] - $currentThreshold, 1);
        $progress = (($amount - $currentThreshold) / $span) * 100;

        return max(0, min(100, round($progress)));
    }
}

if (! function_exists('gla_withdraw_window_label')) {
    function gla_withdraw_window_label()
    {
        return 'Das 10:00 as 17:00, com 1 solicitacao por dia.';
    }
}

if (! function_exists('gla_has_active_base_plan')) {
    function gla_has_active_base_plan($userId)
    {
        return Purchase::where('user_id', $userId)
            ->where('status', 'active')
            ->whereHas('package', function ($query) {
                $query->where('tab', 'vip')->where('validity', 40);
            })
            ->exists();
    }
}

if (! function_exists('gla_next_base_plan_for_total')) {
    function gla_next_base_plan_for_total($totalInvestment)
    {
        $catalog = gla_base_plan_catalog();
        ksort($catalog);

        foreach ($catalog as $price => $meta) {
            if ((float) $price > (float) $totalInvestment) {
                return [
                    'price' => $price,
                    'name' => $meta['name'],
                    'photo' => $meta['photo'],
                ];
            }
        }

        return null;
    }
}

if (! function_exists('gla_pix_key_type_options')) {
    function gla_pix_key_type_options()
    {
        return [
            'CPF' => 'CPF',
            'TELEFONE' => 'Telefone',
            'EMAIL' => 'Email',
            'ALEATORIA' => 'Chave aleatoria',
        ];
    }
}

if (! function_exists('gla_pix_key_type_label')) {
    function gla_pix_key_type_label($type)
    {
        $type = strtoupper((string) $type);

        return gla_pix_key_type_options()[$type] ?? ($type ?: 'PIX');
    }
}

if (! function_exists('gla_mask_pix_key')) {
    function gla_mask_pix_key($key, $type = null)
    {
        $key = trim((string) $key);
        $type = strtoupper((string) $type);

        if ($key === '') {
            return 'Nao cadastrada';
        }

        if ($type === 'CPF') {
            $digits = preg_replace('/\D+/', '', $key);
            if (strlen($digits) === 11) {
                return preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.***.***-$4', $digits);
            }
        }

        if ($type === 'TELEFONE') {
            $digits = preg_replace('/\D+/', '', $key);
            if (strlen($digits) >= 10) {
                $digits = substr($digits, -11);
                if (strlen($digits) === 11) {
                    return preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) *****-$3', $digits);
                }
                if (strlen($digits) === 10) {
                    return preg_replace('/(\d{2})(\d{4})(\d{4})/', '($1) ****-$3', $digits);
                }
            }
        }

        if ($type === 'EMAIL') {
            if (str_contains($key, '@')) {
                [$user, $domain] = explode('@', $key, 2);
                $visible = substr($user, 0, 2);
                return $visible . str_repeat('*', max(strlen($user) - 2, 3)) . '@' . $domain;
            }
        }

        $length = strlen($key);
        if ($length <= 8) {
            return str_repeat('*', max($length - 2, 1)) . substr($key, -2);
        }

        return substr($key, 0, 4) . str_repeat('*', max($length - 8, 4)) . substr($key, -4);
    }
}

if (! function_exists('gla_base_plan_catalog')) {
    function gla_base_plan_catalog()
    {
        return [
            40 => ['name' => 'Semente', 'photo' => '/public/upload/package/gla/safrinha.jpeg'],
            80 => ['name' => 'Broto', 'photo' => '/public/upload/package/gla/cultivo.jpeg'],
            120 => ['name' => 'Cultivo', 'photo' => '/public/upload/package/gla/broto.jpeg'],
            240 => ['name' => 'Safrinha', 'photo' => '/public/upload/package/gla/semente.jpeg'],
            480 => ['name' => 'Safra', 'photo' => '/public/upload/package/gla/colheita-premium.jpeg'],
            960 => ['name' => 'Colheita Premium', 'photo' => '/public/upload/package/gla/safra.jpeg'],
            1920 => ['name' => 'Agro Prime', 'photo' => '/public/upload/package/gla/agro-prime.jpeg'],
        ];
    }
}

if (! function_exists('gla_cycle_plan_catalog')) {
    function gla_cycle_plan_catalog()
    {
        return [
            '40:3' => ['name' => 'Semente'],
            '120:5' => ['name' => 'Germinacao'],
            '240:7' => ['name' => 'Desenvolvimento'],
            '480:10' => ['name' => 'Producao'],
            '960:12' => ['name' => 'Alta Producao'],
            '1920:15' => ['name' => 'Escala Agricola'],
        ];
    }
}

if (! function_exists('gla_event_plan_catalog')) {
    function gla_event_plan_catalog()
    {
        return [
            'quick' => [
                '30:1' => ['name' => 'Semente'],
                '60:1' => ['name' => 'Plantio'],
                '120:1' => ['name' => 'Lavoura'],
                '240:1' => ['name' => 'Safrinha'],
                '480:1' => ['name' => 'Safra'],
                '960:1' => ['name' => 'Mega Safra'],
            ],
            'flash' => [
                '30:1' => ['name' => 'Start Agro'],
                '80:2' => ['name' => 'Base Produtiva'],
                '160:3' => ['name' => 'Expansao Agricola'],
                '320:4' => ['name' => 'Rendimento Ativo'],
                '640:5' => ['name' => 'Alta Rentabilidade'],
                '1280:6' => ['name' => 'Elite Agro'],
            ],
        ];
    }
}

if (! function_exists('gla_package_display_meta')) {
    function gla_package_display_meta($package)
    {
        $fallback = [
            'name' => $package->name ?? 'Plano',
            'photo' => $package->photo ?? '/public/assets/img/greenland-agro-logo.jpeg',
        ];

        if (! $package) {
            return $fallback;
        }

        $tab = $package->tab ?? null;
        $priceKey = (int) ($package->price ?? 0);
        $validityKey = (int) ($package->validity ?? 0);

        if ($tab === 'vip' && $validityKey === 40) {
            $catalog = gla_base_plan_catalog();

            if (! isset($catalog[$priceKey])) {
                return $fallback;
            }

            return [
                'name' => $catalog[$priceKey]['name'],
                'photo' => $catalog[$priceKey]['photo'] ?: $fallback['photo'],
            ];
        }

        if ($tab === 'fixed') {
            $catalog = gla_cycle_plan_catalog();
            $lookup = $priceKey . ':' . $validityKey;

            if (! isset($catalog[$lookup])) {
                return $fallback;
            }

            return [
                'name' => $catalog[$lookup]['name'],
                'photo' => $fallback['photo'],
            ];
        }

        if ($tab === 'event') {
            $catalog = gla_event_plan_catalog();
            $lookup = $priceKey . ':' . $validityKey;
            $currentName = strtolower((string) ($package->name ?? ''));
            $mode = str_contains($currentName, 'escalonado')
                || str_contains($currentName, 'flash')
                || str_contains($currentName, 'start agro')
                || str_contains($currentName, 'base produtiva')
                || str_contains($currentName, 'expansao')
                || str_contains($currentName, 'rendimento ativo')
                || str_contains($currentName, 'alta rentabilidade')
                || str_contains($currentName, 'elite agro')
                ? 'flash'
                : 'quick';

            if (! isset($catalog[$mode][$lookup])) {
                return $fallback;
            }

            return [
                'name' => $catalog[$mode][$lookup]['name'],
                'photo' => $fallback['photo'],
            ];
        }

        return $fallback;
    }
}


?>
