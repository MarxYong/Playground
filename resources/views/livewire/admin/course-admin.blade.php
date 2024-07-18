<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    This is Courses Page

    <div class="card border-info mb-3" style="width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <img class="card-img-top" src="..." alt="Card image cap">
            <h5 class="card-title text-center">{{Auth::user()->email}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{Auth::user()->name}}</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer bg-transparent border-info mb-3">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
</div>
