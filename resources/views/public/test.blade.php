  @if (count($searchCatData) > 0)
                <h3 class="u-custom-font u-text u-text-default u-text-1"> RECENT BLOG POSTS</h3>
                <section id="recent-blog-posts" class="recent-blog-posts" style="margin-bottom: 29px;">
                    <div class="container" data-aos="fade-up">

                        <div class="row g-3">
                            @foreach ($searchCatData as $data)
                                <div class="card" style="margin-left:17px;">
                                    <div class="card__header">
                                        <img src="{{ asset('assets/uploads/blog-img/' . $data->image) }}" alt="card__image"
                                            class="card__image mt-2" width="600" height="200">
                                    </div>
                                    <div class="card__body">
                                        <div class="upper__card__body">
                                            <span class="tag tag-brown"> {{ $data->cat_names }} </span>
                                            <span class="card__date">
                                                {{ date('d M, Y', strtotime($data->created_at)) }}</span>

                                        </div>

                                        <h4>{{ Str::limit($data->title, 50) }}</h4>
                                        <a href="{{ url('blog-details', ['slug' => $data->slug]) }}"
                                            class="readmore stretched-link blog__button mt-5"><span
                                                style="margin-left: 100px;">Read
                                                More</span><i class="fas fa-long-arrow-alt-right"></i></a>

                                    </div>
                                </div>
                            @endforeach
                            <div class="col-md-4 col-sm-4">
                                <section id="blog" class="blog">
                                    <div class="container" data-aos="fade-up" data-aos-delay="100">
                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <div class="sidebar">
                                                    <div class="sidebar-item tags">
                                                        <h3 class="sidebar-title">Categories</h3>

                                                        <ul class="mt-3">
                                                            <a href="{{ url('page?action=blog') }}"
                                                                style="border-color:brown">All</a>
                                                            @foreach ($allblogcat as $data)
                                                                <a
                                                                    href="{{ url('page?action=search-category&catName=') . $data->cat_name }}">{{ $data->cat_name }}</a>
                                                            @endforeach
                                                        </ul>
                                                    </div><!-- End sidebar tags-->
                                                </div><!-- End Blog Sidebar -->
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>

                        </div>

                    </div>
                </section>
            @else
                <div class="p-5 mb-5 m-5">
                    <h1 class="text-white text-center"> Record Not Found !!</h1>
                </div>
            @endif