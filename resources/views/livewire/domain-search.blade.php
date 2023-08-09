<div>
    {{-- The best athlete wants his opponent at his best. --}}
  <!-- resources/views/livewire/domain-search.blade.php -->
<div>
    








    <form wire:submit.prevent="searchDomain" class="form-group d-flex align-items-between row">
    <input  wire:model="domain"   type="text" id="domain" name="domain" class="form-control" placeholder="example.com" style="padding: 10px; border: 1px solid #ccc;" class="col-6">
    <button type="submit" class="btn btn-primary ml-2 col-3">Search</button>
    </form>





    @if ($exists !== null)
        <div>
            <h3>Domain Search Result</h3>
            <p>Status: {{ session('domain_exists') ? 'Domaine Not Available' : 'Domaine Available' }}</p>
        </div>
    @endif
</div>


</div>
