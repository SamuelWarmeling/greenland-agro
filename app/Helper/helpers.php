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

if (! function_exists('gla_base_plan_catalog')) {
    function gla_base_plan_catalog()
    {
        return [
            ['name' => 'Semente', 'photo' => null],
            ['name' => 'Plantio', 'photo' => null],
            ['name' => 'Lavoura', 'photo' => '/public/upload/package/gla/cultivo.jpeg'],
            ['name' => 'Safrinha', 'photo' => '/public/upload/package/gla/safrinha.jpeg'],
            ['name' => 'Safra', 'photo' => '/public/upload/package/gla/safra.jpeg'],
            ['name' => 'Mega Safra', 'photo' => '/public/upload/package/gla/colheita-premium.jpeg'],
        ];
    }
}

if (! function_exists('gla_package_display_meta')) {
    function gla_package_display_meta($package)
    {
        $fallback = [
            'name' => $package->name ?? 'Plano',
            'photo' => $package->photo ?? '/public/assets/img/logo.png',
        ];

        if (! $package || ($package->tab ?? null) !== 'vip' || (int) ($package->validity ?? 0) !== 40) {
            return $fallback;
        }

        $basePlanIds = Package::where('tab', 'vip')
            ->where('validity', 40)
            ->where('status', 'active')
            ->orderBy('price')
            ->pluck('id')
            ->values();

        $position = $basePlanIds->search($package->id);
        $catalog = gla_base_plan_catalog();

        if ($position === false || ! isset($catalog[$position])) {
            return $fallback;
        }

        return [
            'name' => $catalog[$position]['name'],
            'photo' => $catalog[$position]['photo'] ?: $fallback['photo'],
        ];
    }
}


?>
