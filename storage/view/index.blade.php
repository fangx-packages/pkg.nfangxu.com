@extends("layouts.home")

@section("content")
    <section class="section">

        <x-breadcrumb :breadcrumb="[['label' => 'Demo']]"></x-breadcrumb>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Bordered Tab</h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#home2" role="tab"
                                       aria-controls="home" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#profile2" role="tab"
                                       aria-controls="profile" aria-selected="false">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab2" data-toggle="tab" href="#contact2" role="tab"
                                       aria-controls="contact" aria-selected="false">Contact</a>
                                </li>
                            </ul>
                            <div class="tab-content tab-bordered" id="myTab2Content">
                                <div class="tab-pane fade show active" id="home2" role="tabpanel"
                                     aria-labelledby="home-tab2">
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                    quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                                    sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
                                    quaerat voluptatem.
                                </div>
                                <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab2">
                                    No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but
                                    because those who do not know how to pursue pleasure rationally encounter
                                    consequences that are extremely painful. Nor again is there anyone who loves or
                                    pursues or desires to obtain pain of itself, because it is pain, but because
                                    occasionally circumstances occur in which toil and pain can procure him some great
                                    pleasure.
                                </div>
                                <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact-tab2">
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                    excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                                    officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem
                                    rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est
                                    eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere
                                    possimus, omnis voluptas assumenda est, omnis dolor repellendus.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tabs with Horizontal nav-pills</h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-pills pb-3" id="myTab3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab"
                                       aria-controls="home" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab"
                                       aria-controls="profile" aria-selected="false">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab"
                                       aria-controls="contact" aria-selected="false">Contact</a>
                                </li>
                            </ul>
                            <div class="tab-content border-top p-3" id="myTabContent3">
                                <div class="tab-pane fade show active p-0" id="home3" role="tabpanel"
                                     aria-labelledby="home-tab3">
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                    quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                                    sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
                                    quaerat voluptatem.
                                </div>
                                <div class="tab-pane fade p-0" id="profile3" role="tabpanel"
                                     aria-labelledby="profile-tab3">
                                    No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but
                                    because those who do not know how to pursue pleasure rationally encounter
                                    consequences that are extremely painful. Nor again is there anyone who loves or
                                    pursues or desires to obtain pain of itself, because it is pain, but because
                                    occasionally circumstances occur in which toil and pain can procure him some great
                                    pleasure.
                                </div>
                                <div class="tab-pane fade p-0" id="contact3" role="tabpanel"
                                     aria-labelledby="contact-tab3">
                                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                    excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                                    officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem
                                    rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est
                                    eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere
                                    possimus, omnis voluptas assumenda est, omnis dolor repellendus.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@stop