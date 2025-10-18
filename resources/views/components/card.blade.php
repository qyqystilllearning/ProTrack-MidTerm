@props(['highlight' => false])

{{-- 
  Komponen ini sekarang hanya sebuah 'div' pembungkus sederhana.
  Ia tidak lagi memiliki tombol atau link internal.
--}}
<div {{ $attributes->merge(['class' => 'card']) }} @class(['highlight' => $highlight])>
    {{ $slot }}
</div>