<div class="w-100 p-3">
    <h1>Your Profile</h1>

    <section style="background-color: #9de2ff;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                                        alt="Generic placeholder image" class="img-fluid"
                                        style="width: 180px; border-radius: 10px;" />
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <div class="d-flex pt-1">
                                        <h5 class="mb-1">{{ Auth::user()->name }}</h5>
                                        <h6>-Active</h6>
                                    </div>
                                    <p class="mb-2 pb-1">
                                        @if (Auth::user()->job_no)
                                            {{ Auth::user()->job_no }}
                                        @else
                                            -
                                        @endif
                                    </p>
                                    <div class="d-flex justify-content-start rounded-3 p-2 mb-2 bg-body-tertiary">
                                        <div>
                                            <p class="small text-muted mb-1">Occupation Role</p>
                                            <p class="mb-0">
                                                @if (Auth::user()->job_type)
                                                    {{ Auth::user()->job_type }}
                                                @else
                                                    -
                                                @endif
                                            </p>
                                        </div>
                                        <div class="px-3">
                                            <p class="small text-muted mb-1">Phone Number</p>
                                            <p class="mb-0">
                                                @if (Auth::user()->phone)
                                                    {{ Auth::user()->phone }}
                                                @else
                                                    -
                                                @endif
                                            </p>
                                        </div>
                                        <div class="px-3">
                                            <p class="small text-muted mb-1">Email Address</p>
                                            <p class="mb-0">{{ Auth::user()->email }}</p>
                                        </div>
                                        <div class="px-3">
                                            <p class="small text-muted mb-1">Mailing Address</p>
                                            <p class="mb-0">
                                                @if (Auth::user()->address_1)
                                                    {{ Auth::user()->address_1 }} {{ Auth::user()->address_2 }}
                                                    {{ Auth::user()->address_3 }}
                                                @else
                                                    -
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start rounded-3 p-2 mb-2 bg-body-tertiary">

                                        <div>
                                            <p class="small text-muted mb-1">Joined date</p>
                                            <p class="mb-0">10 July 2023</p>
                                        </div>
                                        <div class="px-3">
                                            <p class="small text-muted mb-1">Type of Agreement</p>
                                            <p class="mb-0">Permanant</p>
                                        </div>
                                        <div class="px-3">
                                            <p class="small text-muted mb-1">Approved By</p>
                                            <p class="mb-0">Emberd Yong</p>
                                        </div>
                                        <div class="px-3">
                                            <p class="small text-muted mb-1">Comment</p>
                                            <p class="mb-0">the contract is about to end at may 2024</p>
                                        </div>
                                    </div>
                                    <div class="d-flex pt-1">
                                        <button type="button" data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-secondary me-1 flex-grow-1">
                                            Salaries Details
                                        </button>
                                        <button type="button" data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-primary flex-grow-1">
                                            Courses Details
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
