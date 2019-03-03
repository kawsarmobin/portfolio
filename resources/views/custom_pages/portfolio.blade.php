<div id="portfolio" style="padding-top: 30px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase" style="font-family: inherit">My Project's</h2>
                <hr style="border: 1px solid silver">
            </div>
        </div>
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-md-3 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal{{$project->id}}">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>

                        @if ($project->images)
                            @isset($project->images[0])
                                <img style="width: 400px; height:200px" class="img-fluid" src="{{ asset('uploads/projects/'.$project->images[0]->image) }}" alt="">
                            @else
                                <img class="img-fluid" src="{{ asset('app/img/portfolio/01-thumbnail.jpg') }}" alt="">
                            @endisset
                        @else
                            <img class="img-fluid" src="{{ asset('app/img/portfolio/01-thumbnail.jpg') }}" alt="">
                        @endif


                    </a>
                    <div class="portfolio-caption">
                        <h4>{{ $project->title }}</h4>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
