<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Setting;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->text('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key' => '_site_name',
            'label' => 'judul',
            'value' => 'Website Name',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_location',
            'label' => 'lokasi',
            'value' => 'Banyuwangi, Indonesia',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_github',
            'label' => 'Github',
            'value' => 'https://github.com/kimearwud22',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_instagram',
            'label' => 'Instagram',
            'value' => 'https://www.instagram.com/kimearwud/',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_linkedin',
            'label' => 'Linkedin',
            'value' => 'https://www.linkedin.com/in/kimearwud/',
            'type' => 'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
