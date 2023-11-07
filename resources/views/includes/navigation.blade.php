
<div class="max-w-xl mx-auto">
    <a class="mt-4" href="/">&nbsp;&nbsp;<img src="/images/header/header.jpg" width="90%" alt="Alistair Knox heading" /></a>
    <div class="hidden sm:block">
        <ul class="flex flex-row justify-between mt-1 text-[0.95rem] w-[90%]">
            <li><a class="nav-link" href="/">Home</a></li>
            <li><a class="nav-link" href="{{ url('directories', [2]) }}">Buildings</a></li>
            <li><a class="nav-link" href="{{ url('directories', [27]) }}">Plans</a></li>
            <li><a class="nav-link" href="{{ url('diys') }}">DIY</a></li>
            <li><a class="nav-link" href="{{ url('books') }}">Publications</a></li>
            <style>
                #sortbox:checked ~ #sortboxmenu {
                    opacity: 1;
                }
            </style>
            <div class="relative">
                <input type="checkbox" id="sortbox" class="hidden absolute">
                <label for="sortbox" class="flex items-center space-x-1 cursor-pointer">
                <span class="">Biography</span> 
                </label>
                <div id="sortboxmenu" class="absolute mt-1 right-1 top-full min-w-max shadow rounded opacity-0  transition delay-75 ease-in-out z-10">
                    <ul class="text-left ">
                        <li><a href="/directories/1" class="px-3 py-2 block block bg-gray-50">Biography</a></li>
                        <li><a href="/directories/6" class="px-3 py-2 block block bg-gray-50">Childhood</a></li>
                        <li><a href="/directories/7" class="px-3 py-2 block block bg-gray-50">The&nbsp;Bank</a></li>
                        <li><a href="/directories/8" class="px-3 py-2 block block bg-gray-50">Adolesence</a></li>
                        <li><a href="/directories/9" class="px-3 py-2 block block bg-gray-50">Marriage</a></li>
                        <li><a href="/directories/10" class="px-3 py-2 block block bg-gray-50">The&nbsp;Navy</a></li>
                        <li><a href="/directories/11" class="px-3 py-2 block block bg-gray-50">First&nbsp;Buildings</a></li>
                        <li><a href="/directories/12" class="px-3 py-2 block block bg-gray-50">Bohemian&nbsp;Associations</a></li>
                        <li><a href="/directories/13" class="px-3 py-2 block block bg-gray-50">Early&nbsp;Houses</a></li>
                        <li><a href="/directories/14" class="px-3 py-2 block block bg-gray-50">Margot</a></li>
                        <li><a href="/directories/18" class="px-3 py-2 block block bg-gray-50">Professional&nbsp;Building</a></li>
                        <li><a href="/directories/15" class="px-3 py-2 block block bg-gray-50">Hard&nbsp;Times</a></li>
                        <li><a href="/directories/17" class="px-3 py-2 block block bg-gray-50">The&nbsp;Knox House</a></li>
                        <li><a href="/directories/16" class="px-3 py-2 block block bg-gray-50">Landscape&nbsp;Architecture</a></li>
                        <li><a href="/directories/20" class="px-3 py-2 block block bg-gray-50">Helping&nbsp;Hand</a></li>
                        <li><a href="/directories/19" class="px-3 py-2 block block bg-gray-50">Eltham&nbsp;Shire Council</a></li>
                        <li><a href="/directories/24" class="px-3 py-2 block block bg-gray-50">Mature&nbsp;Houses</a></li>
                        <li><a href="/directories/25" class="px-3 py-2 block block bg-gray-50">Postscript</a></li>
                    </ul>
                </div>
            </div>

            <li><a class="nav-link" href="{{ url('people') }}">People</a></li>
            <li><a class="nav-link" href="{{ url('directories', [28]) }}">Contact</a></li>
        </ul>
    </div>
<div class="space-y-2 visible sm:hidden mt-2 mb-2">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <section class="top-nav">
    @include('includes/nav-burger')
  </section>
</div>


</div>