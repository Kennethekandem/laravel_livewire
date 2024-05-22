{{-- <div class="centered-div col-6 justify-center" style="">
    this is from blogs
    <button class="btn btn-primary">Hello boot</button>
</div> --}}
<div class="col-12">
    <div class="row justify-content-center">
        <div class="col-7 centered-div pb-4">
           <div class="row mt-2 p-2">
                <div class="col-6">
                    <h1 class="logo pl-5"><i>Lucy Bs</i></h1>
                </div>
                <div class="col-6 pt-3">
                    <form class="form-inline">
                        <div class="row">
                            <div class="col-8 p-0 m-0">
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            </div>
                            <div class="col-4 p-0 m-0 justify-content-end">
                                <button class="btn p-background my-sm-0" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                </div>

                

                <div class="col-12 mt-5 justify-content-center blogs">
                    <h3 class="mt-3">Total Blogs <span class="badge badge-dark" style="background: black">{{ $count }}</span></h3>

                    <div class="row mt-4">
                        @foreach ($blogs as $blog)
                            <div class="col-sm-6">
                                <div class="card blog-card mb-5">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $blog->title}} - <small>{{ date('d-m-Y', strtotime($blog->created_at)) }}</small></h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        <div class="row">
                                            <div class="col-3 blog-actions">
                                                <ion-icon name="heart"></ion-icon> <span>2</span>
                                            </div>
                                            <div class="col-3 blog-actions">
                                                <ion-icon name="heart-dislike-outline"></ion-icon> <span>4</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="d-flex">
                            {!! $blogs->links() !!}
                        </div>
                        {{-- <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Invitation to lunch</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <div class="row">
                                    <div class="col-3 blog-actions">
                                        <ion-icon name="heart"></ion-icon> <span>2</span>
                                    </div>
                                    <div class="col-3 blog-actions">
                                        <ion-icon name="heart-dislike-outline"></ion-icon> <span>4</span>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
           </div>
        </div>
    </div>
</div>