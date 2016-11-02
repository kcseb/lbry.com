<?php NavActions::setNavUri('/learn') ?>
<?php Response::addMetaImage(Request::getHostAndProto() . '/img/cover-team.jpg') ?>
<?php Response::setMetaDescription('description.team') ?>
<?php echo View::render('nav/_header', ['isDark' => false]) ?>
<main>
  <div class="content photo-grid spacer2">
    <h1>{{page.team.header}}</h1>
    <p>{{page.team.people}}</p>
    <?php foreach([
        ['jeremy-kauffman', 'michael-zargham'],
        ['josh-finer', 'alex-grintsvayg'],
        ['mike-vine', 'jimmy-kiselak', 'jack-robison'],
        ['job-evers-meltzer', 'reilly-smith', 'alex-liebowitz']
    ] as $bioRow): ?>
    <div class="row-fluid">
      <?php foreach($bioRow as $bioSlug): ?>
        <div class="<?php echo count($bioRow) == 2 ? 'span6' : 'span4' ?> spacer2">
          <?php echo View::render('content/_bio', ['person' => $bioSlug]) ?>
        </div>
      <?php endforeach ?>
    </div>
    <?php endforeach ?>
    <div class="row-fluid">
      <div class="span3"></div>
      <div class="span6">
        <div class="photo-container">
          <img src="/img/team/spooner-644x450.jpg" alt="you!"/>
        </div>
        <div>
          <h4>{{page.team.you.header}}</h4>
          <div class="meta  spacer1">{{page.team.you.title}}</div>
          <p>
            {{page.team.you.parag1}}
          </p>
        </div>
      </div>
    </div>
    <h2>{{page.team.advisory}}</h2>
    <div class="row-fluid">
      <div class="span6 spacer2">
        <?php echo View::render('content/_bio', ['person' => 'alex-tabarrok']) ?>
      </div>
      <div class="span6 spacer2">
        <?php echo View::render('content/_bio', ['person' => 'ray-carballada']) ?>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span6">
        <?php echo View::render('content/_bio', ['person' => 'stephan-kinsella']) ?>
      </div>
      <div class="span6">
        <?php echo View::render('content/_bio', ['person' => 'michael-huemer']) ?>
      </div>
    </div>
  </div>
  <?php echo View::render('nav/_learnFooter') ?>
</main>
<?php echo View::render('nav/_footer') ?>
