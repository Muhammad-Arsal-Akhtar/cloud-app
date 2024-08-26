<div>
 <!-- Open the modal using ID.showModal() method -->

<dialog id="logoutID" class="modal modal-bottom sm:modal-middle">
  <div class="modal-box">
    <h3 class="text-lg font-bold">Are you Sure?</h3>
    <p class="py-4">This action destroy your session.</p>
    <div class="modal-action">
        <button class="btn btn-sm btn-error" wire:click="logout">Confirm</button>
      <form method="dialog">
        <!-- if there is a button in form, it will close the modal -->
        <button class="btn btn-sm">Close</button>
      </form>
    </div>
  </div>
</dialog>

</div>
