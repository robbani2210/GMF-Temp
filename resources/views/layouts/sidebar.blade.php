<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-3xl text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
   <span class="sr-only">Open sidebar</span>
   <i class="ph-bold ph-list"></i>
</button>

<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-52 h-screen transition-transform -translate-x-full sm:translate-x-0 drop-shadow-xl" aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50">
      <img src="{{ asset('img/logo unpad x gmf.png') }}" class="h-7 mt-4 md:h-9 mx-auto" />
      <ul class="space-y-2 mt-12 mx-2">
         <li>
            <a href="/" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-200 group">
               <span class="ph-light ph-house text-3xl"></span>
               <span class="ml-2">Dashboard</span>
            </a>
         </li>
         <li>
            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-200" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                  <span class="ph-light ph-cpu text-3xl flex-shrink-0 transition duration-75 group-hover:text-gray-900"></span>
                  <span class="flex-1 ml-2 text-left whitespace-nowrap">Sensor</span>
                  <i class="ph-light ph-caret-down ml-6 text-sm"></i>
            </button>
            <ul id="dropdown-example" class="hidden py-2 space-y-2 text-sm">
                  <li>
                     <a href="/temperature-chilled-water" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-200">Temperature Chilled Water</a>
                  </li>
                  <li>
                     <a href="/temperature-cooling-water" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-200">Temperature Cooling Water</a>
                  </li>
                     <a href="/condenser-pressure" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-200">Condenser Pressure</a>
                  </li>
                  <li>
                     <a href="/evaporator-pressure" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-200">Evaporator Pressure</a>
                  </li>
                  <li>
                     <a href="/main-motor-current" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-200">Main Motor Current</a>
                  </li>
                  <li>
                     <a href="/oil-tank" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-200">Oil Tank</a>
                  </li>
                  <li>
                     <a href="/oil-capacity" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-200">Oil Capacity</a>
                  </li>
                  <li>
                     <a href="/oil-pressure" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-200">Oil Pressure</a>
                  </li>
                  <li>
                     <a href="/vane-position" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-200">Vane Position</a>
                  </li>
            </ul>
         </li>
         <li>
            <a href="/device" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-200 group">
               <span class="ph-light ph-monitor text-3xl"></span>
               <span class="ml-2">Device</span>
            </a>
         </li>
         <li>
            <a href="/about" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-200 group">
               <span class="ph-light ph-question text-3xl"></span>
               <span class="ml-2">About</span>
            </a>
         </li>
         <li>
            <form action="/logout" method="post">
               @csrf
               <button type="submit" class="dropdown-item"><i
                       class="bi bi-box-arrow-right"></i> Logout</button>
           </form>
         </li>
      </ul>
   </div>
</aside>

