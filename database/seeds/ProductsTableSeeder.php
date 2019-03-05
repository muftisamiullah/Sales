<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'productName' => 'Avast Pro Antivirus 1-Year / 3-PC - Global',
            'productSku' => 59.99,
            'productPrice' => 25.99,
            'productCategoryId'=>2,
            'productSubCategoryId'=>3,
            'productManufacturerId'=>1,
            'productImage'=>'avast1.png',
            'productCartDesc'=>'The best antivirus should work as hard as you do. Avast performs lightning-fast analyses of unknown files in the Cloud, for a lightweight solution that won’t slow down your employees or your business.',
            'productLongDesc'=>'The best antivirus should work as hard as you do. Avast performs lightning-fast analyses of unknown files in the Cloud, for a lightweight solution that won’t slow down your employees or your business.',
            'productWeight' => .5,
            'productUpdateDate'=>now(),
            'productStock'=>43,
            'productLive'=>1,
            'productThumb'=>'this is temp',
            'productTechSpecs'=>'this is tech specs',
            'productAddInfo'=>'this is add info',
            'productUnlimited'=>34,
            'productLocation'=>'srinagar',
        ]);
        DB::table('products')->insert([
            'productName' => 'McAfee Internet Security - 1-Year / 1-Device - Global',
            'productSku' => 59.99,
            'productPrice' => 20.99,
            'productCategoryId'=>2,
            'productSubCategoryId'=>3,
            'productManufacturerId'=>6,
            'productImage'=>'mcafee2.png',
            'productCartDesc'=>'Stay safe from Trojans, viruses, spyware, rootkits, and more, with state-of-the-art anti-malware protection. Stop worrying about performance hits — the advanced scanning engine checks for threats quickly without compromising battery performance.',
            'productLongDesc'=>'Stay safe from Trojans, viruses, spyware, rootkits, and more, with state-of-the-art anti-malware protection. Stop worrying about performance hits — the advanced scanning engine checks for threats quickly without compromising battery performance.',
            'productWeight' => .5,
            'productUpdateDate'=>now(),
            'productStock'=>43,
            'productLive'=>1,
            'productThumb'=>'this is temp',
            'productTechSpecs'=>'this is tech specs',
            'productAddInfo'=>'this is add info',
            'productUnlimited'=>34,
            'productLocation'=>'srinagar',
        ]);
        DB::table('products')->insert([
            'productName' => 'AVG Ultimate 1-Year / Unlimited Devices - Global',
            'productSku' => 99.99,
            'productPrice' => 45.99,
            'productCategoryId'=>2,
            'productSubCategoryId'=>3,
            'productManufacturerId'=>5,
            'productImage'=>'avg4.png',
            'productCartDesc'=>'The all-in-one, top-shelf antivirus & tuneup combo. Loaded with safety features and just as easy to use, our best-in-class protection is designed with simplicity in mind, without compromising on security.',
            'productLongDesc'=>'The all-in-one, top-shelf antivirus & tuneup combo. Loaded with safety features and just as easy to use, our best-in-class protection is designed with simplicity in mind, without compromising on security.',
            'productWeight' => .5,
            'productUpdateDate'=>now(),
            'productStock'=>43,
            'productLive'=>1,
            'productThumb'=>'this is temp',
            'productTechSpecs'=>'this is tech specs',
            'productAddInfo'=>'this is add info',
            'productUnlimited'=>34,
            'productLocation'=>'srinagar',
        ]);
        DB::table('products')->insert([
            'productName' => 'Kaspersky Anti-Virus 2019 - 1-Year / 1-PC - Americas',
            'productSku' => 39.99,
            'productPrice' => 23.99,
            'productCategoryId'=>2,
            'productSubCategoryId'=>3,
            'productManufacturerId'=>7,
            'productImage'=>'kasper1.png',
            'productCartDesc'=>'Essential Protection — Kaspersky Anti-Virus delivers core protection from the latest viruses, malware, and more. It works behind-the-scenes with intelligent scanning and small, frequent updates, while proactively protecting you from known and emerging threats.',
            'productLongDesc'=>'Essential Protection — Kaspersky Anti-Virus delivers core protection from the latest viruses, malware, and more. It works behind-the-scenes with intelligent scanning and small, frequent updates, while proactively protecting you from known and emerging threats.',
            'productWeight' => .5,
            'productUpdateDate'=>now(),
            'productStock'=>43,
            'productLive'=>1,
            'productThumb'=>'this is temp',
            'productTechSpecs'=>'this is tech specs',
            'productAddInfo'=>'this is add info',
            'productUnlimited'=>34,
            'productLocation'=>'srinagar',
        ]);
        DB::table('products')->insert([
            'productName' => 'HP 15 Intel Core i5 7th Gen 15.6-inch FHD Laptop (8GB/1TB HDD/Windows 10 Home),bu044TU',
            'productSku' => 647.99,
            'productPrice' => 591.99,
            'productCategoryId'=>1,
            'productSubCategoryId'=>1,
            'productManufacturerId'=>2,
            'productImage'=>'lap3.jpg',
            'productCartDesc'=>'The HP laptop comes with a 8 GB RAM and 7th Gen Intel Core i5-7200U processor along with a 2.5 GHz base processor speed. The HP Laptop is equipped with a 8 GB DDR4 RAM to deliver more performance for your laptop.',
            'productLongDesc'=>'The HP laptop comes with a 8 GB RAM and 7th Gen Intel Core i5-7200U processor along with a 2.5 GHz base processor speed. The HP Laptop is equipped with a 8 GB DDR4 RAM to deliver more performance for your laptop.',
            'productWeight' => 2.2,
            'productUpdateDate'=>now(),
            'productStock'=>43,
            'productLive'=>1,
            'productThumb'=>'this is temp',
            'productTechSpecs'=>'this is tech specs',
            'productAddInfo'=>'this is add info',
            'productUnlimited'=>34,
            'productLocation'=>'srinagar',
        ]);
        DB::table('products')->insert([
            'productName' => 'Lenovo Yoga 520 Intel Core i3 8th Gen 14-inch Full HD Touch Screen Laptop (4GB/1TB/Windows 10 Home),81C800LVIN',
            'productSku' => 688.99,
            'productPrice' => 589.99,
            'productCategoryId'=>1,
            'productSubCategoryId'=>2,
            'productManufacturerId'=>8,
            'productImage'=>'lap7.jpg',
            'productCartDesc'=>'Gorgeous video. Enhanced, immersive audio. It’s all here in the Yoga 520, a stylish 14” 2-in-1 laptop with a powerful processor and long-lasting battery life. Thanks to a durable 360-degree hinge, you can easily flip into tablet mode for browsing the web, or stream a TV show in tent mode. With this much flexibility, you’ll always find your perfect viewing angle.',
            'productLongDesc'=>'Gorgeous video. Enhanced, immersive audio. It’s all here in the Yoga 520, a stylish 14” 2-in-1 laptop with a powerful processor and long-lasting battery life. Thanks to a durable 360-degree hinge, you can easily flip into tablet mode for browsing the web, or stream a TV show in tent mode. With this much flexibility, you’ll always find your perfect viewing angle.',
            'productWeight' => 1.7,
            'productUpdateDate'=>now(),
            'productStock'=>43,
            'productLive'=>1,
            'productThumb'=>'this is temp',
            'productTechSpecs'=>'this is tech specs',
            'productAddInfo'=>'this is add info',
            'productUnlimited'=>34,
            'productLocation'=>'srinagar',
        ]);
        DB::table('products')->insert([
            'productName' => 'HP DeskJet Ink Advantage 3835 All-in-One Multi-function Wireless Printer (Black, Ink Cartridge)',
            'productSku' => 124.99,
            'productPrice' => 84.99,
            'productCategoryId'=>3,
            'productSubCategoryId'=>6,
            'productManufacturerId'=>2,
            'productImage'=>'printer5.jpg',
            'productCartDesc'=>'Connect this printer to your wireless network to use it with smartphones, tablets or PCs. Copy, fax, scan or print using your smart device, even if you’re occupied with a meeting. The HP All-in-One Printer Remote mobile app lets you manage your printing and scanning tasks remotely.',
            'productLongDesc'=>'Connect this printer to your wireless network to use it with smartphones, tablets or PCs. Copy, fax, scan or print using your smart device, even if you’re occupied with a meeting. The HP All-in-One Printer Remote mobile app lets you manage your printing and scanning tasks remotely.',
            'productWeight' => 2.7,
            'productUpdateDate'=>now(),
            'productStock'=>43,
            'productLive'=>1,
            'productThumb'=>'this is temp',
            'productTechSpecs'=>'this is tech specs',
            'productAddInfo'=>'this is add info',
            'productUnlimited'=>34,
            'productLocation'=>'srinagar',
        ]);
        DB::table('products')->insert([
            'productName' => 'Samsung 128GB 100MB/s (U3) MicroSD EVO Select Memory Card with Adapter (MB-ME128GA/AM)',
            'productSku' => 41.99,
            'productPrice' => 27.99,
            'productCategoryId'=>4,
            'productSubCategoryId'=>8,
            'productManufacturerId'=>4,
            'productImage'=>'access2.jpg',
            'productCartDesc'=>'Simply the right card. With stunning speed and reliability, the Samsung 128GB microSD EVO Select memory card lets you get the most out of your devices. Whether you are a power user or simply want to expand your device memory, this MicroSD card gives you the advantage of ultra-fast read & write speeds of up to 100MB/s & 90MB/s.',
            'productLongDesc'=>'Simply the right card. With stunning speed and reliability, the Samsung 128GB microSD EVO Select memory card lets you get the most out of your devices. Whether you are a power user or simply want to expand your device memory, this MicroSD card gives you the advantage of ultra-fast read & write speeds of up to 100MB/s & 90MB/s.',
            'productWeight' => 0.3,
            'productUpdateDate'=>now(),
            'productStock'=>43,
            'productLive'=>1,
            'productThumb'=>'this is temp',
            'productTechSpecs'=>'this is tech specs',
            'productAddInfo'=>'this is add info',
            'productUnlimited'=>34,
            'productLocation'=>'srinagar',
        ]);

   
}
    }
    

