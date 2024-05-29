<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create([
            'name' => 'Sapphire',
            'description' => 'Sapphire is a precious gemstone variety of the mineral corundum, known for its intense blue color. However, sapphires can also come in a wide range of other colors, including yellow, orange, pink, purple, green, and black. Sapphires are highly prized for their durability (second only to diamond on the Mohs scale of mineral hardness) and brilliance. They are a popular choice for engagement rings and other fine jewelry.',
            'slug' => 'sapphire',
        ]);
        Type::create([
            'name' => 'Ruby',
            'description' => 'Ruby is a precious gemstone that is a variety of corundum, an aluminum oxide. Ruby is red in color and is one of the most valuable gemstones. It is called the "King of Gemstones" and is considered one of the four precious stones, along with sapphire, emerald, and diamond. Ruby is the birthstone for July and is also the gem for the 15th and 40th anniversaries.',
            'slug' => 'ruby',
        ]);
        Type::create([
            'name' => 'Amber',
            'description' => 'Amber is a fossilized tree resin, not a true mineral gem. It can range in color from yellow and orange to deep red and brown, sometimes even containing inclusions of plant or insect fossils. Amber is valued for its warmth, beauty, and historical significance. It has been used in jewelry and decorative objects for centuries.',
            'slug' => 'amber',
        ]);
        Type::create([
            'name' => 'Emerald',
            'description' => 'Emerald is a precious gemstone and a variety of the mineral beryl colored green by trace amounts of chromium and sometimes vanadium. Beryl has a hardness of 7.5–8 on the Mohs scale. Most emeralds are highly included, so their toughness (resistance to breakage) is classified as generally poor. Emerald is a cyclosilicate.',
            'slug' => 'emerald',
        ]);
        Type::create([
            'name' => 'Diamond',
            'description' => 'Diamond is a solid form of the element carbon with its atoms arranged in a crystal structure called diamond cubic. At room temperature and pressure, another solid form of carbon known as graphite is the chemically stable form of carbon, but diamond almost never converts to it. Diamond has the highest hardness and thermal conductivity of any natural material, properties that are utilized in major industrial applications such as cutting and polishing tools.',
            'slug' => 'diamond',
        ]);

    }
}
