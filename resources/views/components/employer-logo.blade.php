@props(['employer', 'width' => 90])

<!-- This will be for production -->
<!-- <img src="{{ asset($employer->logo) }}" alt="" class="rounded-xl" width="{{ $width }}"> -->

<!-- This generates temporary logo images -->
<!-- <img src="http://picsum.photos/seed/{{ rand(0, 100000) }}/{{ $width }}/{{ $width }}" alt="" class="rounded-xl" width="{{ $width }}"> -->


<!-- <img src="http://picsum.photos/seed/{{ rand(0, 100000) }}" alt="" class="rounded-xl" width="{{ $width }}"> -->
<!-- <img src="{{ asset($employer->logo) }}" alt="" class="rounded-xl" width="{{ $width }}"> -->

<!-- <img src="http://picsum.photos/{{ $width }}" alt="" class="rounded-xl" width="{{ $width }}"> -->

<!-- <img src="http://picsum.photos/seed/{{ rand(0, 100000) }}/{{ $width }}/{{ $width }}" alt="" class="rounded-xl" width="{{ $width }}"> -->

<img src="http://picsum.photos/{{ $width }}/{{ $width }}?ramdom={{ rand(0, 100000) }}" alt="" class="rounded-xl" width="{{ $width }}">
