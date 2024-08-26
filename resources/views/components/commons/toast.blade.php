
@if (session('success'))
<div class="toast" x-data="{
    show : true,
    init(){
    setTimeout(() => { 
    this.show = false; }, 3000)
    }
  }" x-show="show">
  <div class="alert alert-success">
    <span class="text-white">{{ session('success') }}</span>
  </div>
</div>

@elseif (session('warning'))
<div class="toast" x-data="{
  show : true,
  init(){
  setTimeout(() => { 
  this.show = false; }, 3000)
  }
}" x-show="show">
  <div class="alert alert-warning">
    <span class="text-white">{{ session('warning') }}</span>
  </div>
</div>
  
@endif