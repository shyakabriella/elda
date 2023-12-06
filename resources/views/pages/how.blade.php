@extends('layouts.main')

@section('content')


<section class="timeline-section section-padding">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class="text-white mb-4">How does it work?</h1>
                        </div>

                        <div class="col-lg-10 col-12 mx-auto">
                            <div class="timeline-container">
                                <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                    <div class="list-progress">
                                        <div class="inner"></div>
                                    </div>

                                    <li>
                                        <h4 class="text-white mb-3">IDENTIFICATION</h4>

                                        <p class="text-white">"Irembo" in Rwanda refers to an e-Government platform that provides various online services to citizens. The platform aims to simplify and streamline government services, making them more accessible and efficient. People in Rwanda can use Irembo to access a range of services, including applying for official documents, paying fees, and accessing information..</p>

                                        <div class="icon-holder">
                                          <i class="bi-search"></i>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <h4 class="text-white mb-3">LAND </h4>

                                        <p class="text-white">Support educators and researchers in honing their teaching and research skills through workshops, webinars, and access to up-to-date educational research.</p>

                                        <div class="icon-holder">
                                          <i class="bi-bookmark"></i>
                                        </div>
                                    </li>

                                    <li>
                                        <h4 class="text-white mb-3">POLICE</h4>

                                        <p class="text-white">Implement AI-driven features that can provide instant answers to questions, assist with homework, and offer explanations on complex topics.</p>

                                        <div class="icon-holder">
                                          <i class="bi-book"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-12 text-center mt-5">
                            <p class="text-white">
                                Want to learn more?
                                <a href="#" class="btn custom-btn custom-border-btn ms-3">Check out Youtube</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

@endsection