<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>IXmaps</title>

    <?php include '../../_includes/global-head.php'; ?>

<body clas="page-section">

<section class="container">
    <div class="row">
        <div class="col-6 col-left-3 col-md-8 col-md-left-2 col-sm-10 col-sm-left-1">

            <h1>Header 1</h1>
            <h2>Header 2</h2>
            <h3>Header 3</h3>
            <h4>Header 4<br> <em>Emphasized</em></h4>
            <h5>Header 5<br> <em>Emphasized</em></h5>
            <h6>Header 6<br> <em>Emphasized</em></h6>

            <hr>

            <p class="intro">Intro paragraph. <strong>Strong</strong>, <em>emphasized</em>, <a href="#">linked</a>.</p>

            <p class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In iaculis nibh sed nulla vehicula, in aliquet ligula vestibulum. Suspendisse aliquam efficitur nisl. Rhoncus leo sodales non.</p>

            <hr>

            <p>Standard paragraph. <strong>Strong</strong>, <em>emphasized</em>, <a href="#">linked</a>.</p>

            <p>Aliquam eu erat neque. Aliquam interdum ipsum metus, vel commodo est hendrerit et. Praesent nibh felis, malesuada id faucibus nec, laoreet vitae enim. Pellentesque suscipit ipsum facilisis eros ullamcorper luctus. Donec laoreet fringilla aliquet. Mauris a fringilla orci, nec ultrices felis vestibulum ante ipsum.</p>

            <hr>

            <p class="minor">Minor paragraph. <strong>Strong</strong>, <em>emphasized</em>, <a href="#">linked</a>.</p>

            <p class="minor">Aliquam efficitur eros ac dolor euismod facilisis. Maecenas mattis interdum mauris, sit amet fermentum justo. Class aptent taciti sociosqu ad, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin sed ligula porta, dignissim orci id, commodo nisl.</p>

            <hr>

            <p class="small">Small text, used for small details like legal or disclaimer text.<br> Strong</strong>, <em>emphasized</em>, <a href="#">linked</a>.</p>

            <hr>

            <p class="list-header"><strong>Ordered List:</strong></p>
            <ol>
              <li>First Item</li>
              <li>Second Item</li>
              <li>Third Item</li>
            </ol>

            <p class="list-header"><strong>Unordered List:</strong></p>
            <ul>
              <li>First Item</li>
              <li>Second Item</li>
              <li>Third Item</li>
            </ul>

            <p class="list-header"><strong>Definition List:</strong></p>
            <dl>
              <dt>Term One</dt>
              <dd>First definition description</dd>
              <dt>Term Two</dt>
              <dd>Second definition description</dd>
              <dt>Term Three</dt>
              <dd>Third definition description</dd>
            </dl>

            <blockquote cite="#">
                <p>Blockquote sample text.</p>
            </blockquote>

        </div>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-6 colour-block ixblue">
            $ixblue: #1C6FB8;
        </div>
        <div class="col-6 colour-block ixred">
            $ixred: #D32125;
        </div>
    </div>

    <div class="row">
        <div class="col-3 colour-block green">
            $green: #467848;
        </div>
        <div class="col-3 colour-block green_light">
            $green_light: #CFE3D0;
        </div>
        <div class="col-3 colour-block skyblue">
            $skyblue: #2289E4;
        </div>
        <div class="col-3 colour-block yellow">
            $yellow: #F0CB1A;
        </div>
    </div>

    <div class="row">
        <div class="col-3 colour-block grey_dark">
            $grey_dark: #191C1F;
        </div>
        <div class="col-3 colour-block grey">
            $grey: #2D3A47;
        </div>
        <div class="col-3 colour-block grey_light">
            $grey_light: #F0F0F0;
        </div>
        <div class="col-3 colour-block page">
            $page: #fafafa;
        </div>
    </div>
</section>

</body>
</html>