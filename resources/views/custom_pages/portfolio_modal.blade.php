<div class="portfolio-modal modal fade" id="portfolioModal{{$proje->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-info">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container" style="color: white">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">{{ $proje->title }}</h2>
                                <p>
                                    {{ $proje->sort_desc }}
                                </p>
                                <ul class="list-inline">
                                    <li>{{ $proje->created_at->toFormattedDateString() }}</li> <br>
                                    <li>Category: {{$proje->category->name}}</li> <br>
                                    <li>Technology: {{$proje->technologies_use}}</li> <br>
                                    <li>URL: {{$proje->url_1}}</li> <br>
                                    <li>URL: {{$proje->url_2}}</li> <br>
                                   {{-- <li><a target href="{{$proje->url_1}}">URL: {{$proje->url_1}}</a></li> --}}
                                </ul>

                                <div class="col-md-12">
                                    @if ($proje->images)
                                        @foreach ($proje->images as $image)
                                            <div class="col-md-6 pull-left">
                                                <img style="width: 500px; height: 200px;" class="img-fluid" src="{{ asset('uploads/projects/'.$image->image) }}" alt="">
                                            </div>
                                        @endforeach
                                    @else
                                        <img class="img-fluid d-block mx-auto" src="{{ asset('app/img/portfolio/01-full.jpg') }}" alt="">
                                    @endif
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                            <i class="fa fa-times"></i>
                            Close Project</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
