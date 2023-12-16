@extends('layout/app')
 
@section('title', 'Produk')

@section('content')

@php
$data1 = array(
    'product_name' => 'Ini Produk A',
    'slug' => 'meningkatnya-produktivitas-petani',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus sapien mollis massa auctor, non dictum massa pellentesque. Integer tempor eu diam efficitur pharetra. Ut maximus quis quam nec molestie. Sed vitae libero risus. Ut fringilla diam sed molestie bibendum. Ut cursus ipsum quis tellus tincidunt scelerisque sit amet non mauris. Vivamus arcu purus, sollicitudin mollis cursus sit amet, sodales nec turpis. Nulla vel faucibus risus, accumsan ultrices nisl. Nulla enim mauris, gravida ut justo ut, ullamcorper mattis mauris. Integer eget odio sit amet neque pellentesque consequat. Praesent pretium lectus sit amet felis porta accumsan. Sed a scelerisque est. Morbi accumsan eros sed massa semper, nec sollicitudin felis iaculis. Integer a erat quis leo volutpat dapibus at in metus. Sed sagittis euismod lorem, semper ullamcorper leo euismod ut.',
    'image' => 'https://mediatani.co/wp-content/uploads/2020/10/terasering.png?auto=format&q=75&fit=crop&w=600',
    'pricing' => '55.000',
    'product_category' => 'Sayur',
    'created_at' => 'July 19, 2021',
);
$data2 = array(
    'product_name' => 'Ini Produk B',
    'slug' => 'meningkatnya-produktivitas-petani',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus sapien mollis massa auctor, non dictum massa pellentesque. Integer tempor eu diam efficitur pharetra. Ut maximus quis quam nec molestie. Sed vitae libero risus. Ut fringilla diam sed molestie bibendum. Ut cursus ipsum quis tellus tincidunt scelerisque sit amet non mauris. Vivamus arcu purus, sollicitudin mollis cursus sit amet, sodales nec turpis. Nulla vel faucibus risus, accumsan ultrices nisl. Nulla enim mauris, gravida ut justo ut, ullamcorper mattis mauris. Integer eget odio sit amet neque pellentesque consequat. Praesent pretium lectus sit amet felis porta accumsan. Sed a scelerisque est. Morbi accumsan eros sed massa semper, nec sollicitudin felis iaculis. Integer a erat quis leo volutpat dapibus at in metus. Sed sagittis euismod lorem, semper ullamcorper leo euismod ut.',
    'image' => 'https://mediatani.co/wp-content/uploads/2020/10/terasering.png?auto=format&q=75&fit=crop&w=600',
    'pricing' => '15.000',
    'product_category' => 'Sayur',
    'created_at' => 'July 19, 2021',
);
$data3 = array(
    'product_name' => 'Ini Produk C',
    'slug' => 'meningkatnya-produktivitas-petani',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus sapien mollis massa auctor, non dictum massa pellentesque. Integer tempor eu diam efficitur pharetra. Ut maximus quis quam nec molestie. Sed vitae libero risus. Ut fringilla diam sed molestie bibendum. Ut cursus ipsum quis tellus tincidunt scelerisque sit amet non mauris. Vivamus arcu purus, sollicitudin mollis cursus sit amet, sodales nec turpis. Nulla vel faucibus risus, accumsan ultrices nisl. Nulla enim mauris, gravida ut justo ut, ullamcorper mattis mauris. Integer eget odio sit amet neque pellentesque consequat. Praesent pretium lectus sit amet felis porta accumsan. Sed a scelerisque est. Morbi accumsan eros sed massa semper, nec sollicitudin felis iaculis. Integer a erat quis leo volutpat dapibus at in metus. Sed sagittis euismod lorem, semper ullamcorper leo euismod ut.',
    'image' => 'https://mediatani.co/wp-content/uploads/2020/10/terasering.png?auto=format&q=75&fit=crop&w=600',
    'pricing' => '25.000',
    'product_category' => 'Buah',
    'created_at' => 'July 19, 2021',
);
$data4 = array(
    'product_name' => 'Ini Produk D',
    'slug' => 'meningkatnya-produktivitas-petani',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus sapien mollis massa auctor, non dictum massa pellentesque. Integer tempor eu diam efficitur pharetra. Ut maximus quis quam nec molestie. Sed vitae libero risus. Ut fringilla diam sed molestie bibendum. Ut cursus ipsum quis tellus tincidunt scelerisque sit amet non mauris. Vivamus arcu purus, sollicitudin mollis cursus sit amet, sodales nec turpis. Nulla vel faucibus risus, accumsan ultrices nisl. Nulla enim mauris, gravida ut justo ut, ullamcorper mattis mauris. Integer eget odio sit amet neque pellentesque consequat. Praesent pretium lectus sit amet felis porta accumsan. Sed a scelerisque est. Morbi accumsan eros sed massa semper, nec sollicitudin felis iaculis. Integer a erat quis leo volutpat dapibus at in metus. Sed sagittis euismod lorem, semper ullamcorper leo euismod ut.',
    'image' => '',
    'pricing' => '45.000',
    'product_category' => 'Umbi',
    'created_at' => 'July 19, 2021',
);

$data_page = [$data1, $data2, $data3, $data4];
@endphp

<div class="flex flex-row justify-center items-center py-6 sm:py-8 lg:py-12">
  <section class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <div class="mb-10 md:mb-16">
      <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Produk</h2>

      <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">Temukan produk yang anda inginkan di Toko kami.</p>
    </div>
    <div class="mb-8 flex flex-wrap justify-between md:mb-16">
        @if ($data_page != NULL || $data_page->isNotEmpty())
        <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-4 xl:grid-cols-4 xl:gap-8">
        @foreach ($data_page as $data)
            <div class="w-full">
                <a href="{{ $data['slug'] }}" class="block relative h-48 rounded overflow-hidden">
                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src={{ $data['image'] != NULL ? $data['image'] : "https://dummyimage.com/420x260/ddffdd/007300&text=Image+Not+Found"}}>
                </a>
                <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $data['product_category'] }}</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">{{ $data['product_name'] }}</h2>
                <p class="mt-1">Rp. {{ $data['pricing'] }}</p>
                </div>
            </div>
        @endforeach
        </div>
        @else
        <div class="flex flex-col items-center">
            <li class="py-3 sm:text-lg font-small text-gray-800 dark:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="147.63626" height="132.17383" viewBox="0 0 647.63626 632.17383" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M687.3279,276.08691H512.81813a15.01828,15.01828,0,0,0-15,15v387.85l-2,.61005-42.81006,13.11a8.00676,8.00676,0,0,1-9.98974-5.31L315.678,271.39691a8.00313,8.00313,0,0,1,5.31006-9.99l65.97022-20.2,191.25-58.54,65.96972-20.2a7.98927,7.98927,0,0,1,9.99024,5.3l32.5498,106.32Z" transform="translate(-276.18187 -133.91309)" fill="#f2f2f2"/><path d="M725.408,274.08691l-39.23-128.14a16.99368,16.99368,0,0,0-21.23-11.28l-92.75,28.39L380.95827,221.60693l-92.75,28.4a17.0152,17.0152,0,0,0-11.28028,21.23l134.08008,437.93a17.02661,17.02661,0,0,0,16.26026,12.03,16.78926,16.78926,0,0,0,4.96972-.75l63.58008-19.46,2-.62v-2.09l-2,.61-64.16992,19.65a15.01489,15.01489,0,0,1-18.73-9.95l-134.06983-437.94a14.97935,14.97935,0,0,1,9.94971-18.73l92.75-28.4,191.24024-58.54,92.75-28.4a15.15551,15.15551,0,0,1,4.40966-.66,15.01461,15.01461,0,0,1,14.32032,10.61l39.0498,127.56.62012,2h2.08008Z" transform="translate(-276.18187 -133.91309)" fill="#3f3d56"/><path d="M398.86279,261.73389a9.0157,9.0157,0,0,1-8.61133-6.3667l-12.88037-42.07178a8.99884,8.99884,0,0,1,5.9712-11.24023l175.939-53.86377a9.00867,9.00867,0,0,1,11.24072,5.9707l12.88037,42.07227a9.01029,9.01029,0,0,1-5.9707,11.24072L401.49219,261.33887A8.976,8.976,0,0,1,398.86279,261.73389Z" transform="translate(-276.18187 -133.91309)" fill="#6c63ff"/><circle cx="190.15351" cy="24.95465" r="20" fill="#6c63ff"/><circle cx="190.15351" cy="24.95465" r="12.66462" fill="#fff"/><path d="M878.81836,716.08691h-338a8.50981,8.50981,0,0,1-8.5-8.5v-405a8.50951,8.50951,0,0,1,8.5-8.5h338a8.50982,8.50982,0,0,1,8.5,8.5v405A8.51013,8.51013,0,0,1,878.81836,716.08691Z" transform="translate(-276.18187 -133.91309)" fill="#e6e6e6"/><path d="M723.31813,274.08691h-210.5a17.02411,17.02411,0,0,0-17,17v407.8l2-.61v-407.19a15.01828,15.01828,0,0,1,15-15H723.93825Zm183.5,0h-394a17.02411,17.02411,0,0,0-17,17v458a17.0241,17.0241,0,0,0,17,17h394a17.0241,17.0241,0,0,0,17-17v-458A17.02411,17.02411,0,0,0,906.81813,274.08691Zm15,475a15.01828,15.01828,0,0,1-15,15h-394a15.01828,15.01828,0,0,1-15-15v-458a15.01828,15.01828,0,0,1,15-15h394a15.01828,15.01828,0,0,1,15,15Z" transform="translate(-276.18187 -133.91309)" fill="#3f3d56"/><path d="M801.81836,318.08691h-184a9.01015,9.01015,0,0,1-9-9v-44a9.01016,9.01016,0,0,1,9-9h184a9.01016,9.01016,0,0,1,9,9v44A9.01015,9.01015,0,0,1,801.81836,318.08691Z" transform="translate(-276.18187 -133.91309)" fill="#6c63ff"/><circle cx="433.63626" cy="105.17383" r="20" fill="#6c63ff"/><circle cx="433.63626" cy="105.17383" r="12.18187" fill="#fff"/></svg>
            </li>
            <p class="p-2 sm:text-lg font-small text-gray-800 dark:text-white">No data found in database!</p>
        </div>
        @endif
    </div>
  </section>
</div>

<x-footer/>
@endsection