
<div class="navbar">
  <div class="flex-1">
    <a class="text-lg btn btn-ghost"><img src="{{asset('images/logo_192.png')}}" class="w-8 h-8" alt=""> Dashboard Files</a>
  </div>
  <div class="flex-none">
    <button class="mr-3 btn btn-sm btn-warning" onclick="addfile.showModal()">Add File</button>
    <x-commons.themeSwitch />
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img
            alt="Tailwind CSS Navbar component"
            src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
        </div>
      </div>
      <ul
        tabindex="0"
        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
        <li>
          <a class="justify-between">
            Profile
          </a>
        </li>
        <li><a onclick="logoutID.showModal()">Logout</a></li>
      </ul>
    </div>
  </div>

  <livewire:auth.logout />
  <livewire:files.add-file />
</div>