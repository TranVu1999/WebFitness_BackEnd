(function ($) {
  'use strict';

  $(".ms-panel-body").on('click', '.trigger-swal', function () {

    var swalType = $(this).data('swal');

    switch (swalType) {

      case 'basic':
        Swal.fire('The Internet?', 'That thing is still around?', 'question');
        break;
      case 'with-footer':
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'Something went wrong!',
          footer: '<a href="#">Why do I have this issue?</a>'
        });
        break;
      case 'positioned':
        Swal.fire({
          position: 'top-end',
          type: 'success',
          title: 'Your work has been saved',
          showConfirmButton: false,
          timer: 1500
        });
        break;
      case 'with-html':
        Swal.fire({
          title: '<strong>HTML <u>example</u></strong>',
          type: 'info',
          html: 'You can use <b>bold text</b>, ' + '<a href="#">links</a> ' + 'and other HTML tags',
          showCloseButton: true,
          showCancelButton: true,
          focusConfirm: false,
          confirmButtonText: 'Great!',
          confirmButtonAriaLabel: 'Thumbs up, great!',
          cancelButtonText: 'Close',
          cancelButtonAriaLabel: 'Thumbs down'
        });
        break;
      case 'multi-step':
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then(function (result) {
          if (result.value) {
            Swal.fire('Deleted!', 'Your file has been deleted.', 'success');
          }
        });
        break;
      case 'auto-close':
        var timerInterval = void 0;
        Swal.fire({
          title: 'Auto close alert!',
          html: 'I will close in <strong></strong> seconds.',
          timer: 2000,
          onBeforeOpen: function onBeforeOpen() {
            Swal.showLoading();
            timerInterval = setInterval(function () {
              Swal.getContent().querySelector('strong').textContent = Swal.getTimerLeft();
            }, 100);
          },
          onClose: function onClose() {
            clearInterval(timerInterval);
          }
        }).then(function (result) {
          if (
          // Read more about handling dismissals
          result.dismiss === Swal.DismissReason.timer) ;
        });
        break;
      case 'ajax':
        var ipAPI = 'https://api.ipify.org?format=json';
        Swal.queue([{
          title: 'Your public IP',
          confirmButtonText: 'Show my public IP',
          text: 'Your public IP will be received ' + 'via AJAX request',
          showLoaderOnConfirm: true,
          preConfirm: function preConfirm() {
            return fetch(ipAPI).then(function (response) {
              return response.json();
            }).then(function (data) {
              return Swal.insertQueueStep(data.ip);
            }).catch(function () {
              Swal.insertQueueStep({
                type: 'error',
                title: 'Unable to get your public IP'
              });
            });
          }
        }]);
        break;
      case 'custom':
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          width: 960,
          height: 1000,
          html: 
          '<div class="col-md-12">' +
            '<div class="ms-panel ms-panel-fh">'+
              '<div class="ms-panel-header">'+
              '</div>'+
              '<div class="ms-panel-body clearfix">'+
                '<ul class="nav nav-tabs tabs-bordered left-tabs nav-justified" role="tablist" aria-orientation="vertical">'+
                  '<li role="presentation"><a href="#tab7" aria-controls="tab7" class="active show" role="tab" data-toggle="tab"> Overview </a></li>'+
                  '<li role="presentation"><a href="#tab8" aria-controls="tab8" role="tab" data-toggle="tab"> Profile </a></li>'+
                  '<li role="presentation"><a href="#tab9" aria-controls="tab9" role="tab" data-toggle="tab"> Settings </a></li>'+
                '</ul>'+
                '<div class="tab-content">'+
                  '<div role="tabpanel" class="tab-pane active show fade in" id="tab7">'+
                    '<div class="col-md-12">'+
                      '<div class="ms-panel ms-panel-fh">'+
                        '<div class="ms-panel-body" style="padding-top: 0">'+
                          '<ul class="nav nav-tabs tabs-bordered d-flex nav-justified mb-4" role="tablist">'+
                            '<li role="presentation"><a href="#tab1" aria-controls="tab1" class="active show" role="tab" data-toggle="tab"> Overview </a></li>'+
                            '<li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"> Profile </a></li>'+
                          '</ul>'+
                          '<div class="tab-content">'+
                            '<div role="tabpanel" class="tab-pane active show fade in" id="tab1">'+
                              '<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam urna nunc, congue nec laoreet sed, maximus non massa. Fusce vestibulum vel risus vitae tincidunt. </p>'+
                              '<p> Cras egestas nisi vel tempor dignissim. Ut condimentum iaculis ex nec ornare. Vivamus sit amet elementum ante. Fusce eget erat volutpat </p>'+
                            '</div>'+
                            '<div role="tabpanel" class="tab-pane fade" id="tab2">'+
                              '<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam urna nunc, congue nec laoreet sed, maximus non massa. Fusce vestibulum vel risus vitae tincidunt. </p>'+
                              '<p> Cras egestas nisi vel tempor dignissim. Ut condimentum iaculis ex nec ornare. Vivamus sit amet elementum ante. Fusce eget erat volutpat </p>'+
                              '<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam urna nunc, congue nec laoreet sed, maximus non massa. Fusce vestibulum vel risus vitae tincidunt. </p>'+
                            '</div>'+
                          '</div>'+
                        '</div>'+
                      '</div>'+
                    '</div>' +
                  '</div>'+
                  '<div role="tabpanel" class="tab-pane fade" id="tab8">'+
                    '<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam urna nunc, congue nec laoreet sed, maximus non massa. Fusce vestibulum vel risus vitae tincidunt. </p>'+
                    '<p> Cras egestas nisi vel tempor dignissim. Ut condimentum iaculis ex nec ornare. Vivamus sit amet elementum ante. Fusce eget erat volutpat </p>'+
                    '<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam urna nunc, congue nec laoreet sed, maximus non massa. Fusce vestibulum vel risus vitae tincidunt. </p>'+
                  '</div>'+
                  '<div role="tabpanel" class="tab-pane fade" id="tab9">'+
                    '<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam urna nunc, congue nec laoreet sed, maximus non massa. Fusce vestibulum vel risus vitae tincidunt. </p>'+
                  '</div>'+
                '</div>'+
              '</div>'+
            '</div>'+
          '</div>',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!',
        }).then((result) => {
          if (result.value) {
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
          }
        });
        break;
      case 'mail-box':
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          width: 960,
          height: 1000,
          html: 
            '<div class="ms-panel ms-panel-mail-box">'+
              '<div class="ms-panel-body">' +
                  '<form class="needs-validation w-100" novalidate>' +
                      '<div class="form-group">' +
                          '<label for="email_adress">Email Address</label>' +
                          '<div class="input-group">' +
                              '<input type="text" class="form-control" id="email_adress"required>' +
                              '<div class="invalid-tooltip">' +
                                  'Please provide a valid city.' +
                              '</div>' +
                          '</div>' +
                      '</div>' +

                      '<div class="form-group">' +
                          '<label for="subject">Subject: </label>' +
                          '<div class="input-group">'+
                              '<input type="text" class="form-control" id="subject" required>' +
                              '<div class="invalid-tooltip">' +
                                  'Please provide a valid city.' +
                              '</div>' +
                          '</div>' +
                      '</div>' +

                      '<div class="form-group">' +
                          '<label for="message">Message: </label>' +
                          '<div class="input-group">' +
                              '<textarea class="form-control" id="message" rows="8" required=""></textarea>' +
                              '<div class="invalid-tooltip">' +
                                  'Please provide a valid city.' +
                              '</div>' +
                          '</div>' +
                      '</div>' +

                      '<div class="form-group">' +
                          '<div class="d-flex-fstart-center">' +
                              '<button type="button" class="btn btn-primary has-icon btn-file">' +
                                  '<i class="fa fa-paperclip"></i> Attachment' +
                                  '<input type="file" name="attachment">' +
                              '</button>' +
                              '<p class="help-block color-808080">Max. 32MB</p>' +
                          '</div>' +
                      '</div>' +
                  '</form>' +
              '</div>' +
            '</div>',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!',
        }).then((result) => {
          if (result.value) {
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
          }
        });
        break;
      case 'view-post':
        Swal.fire({
          title: 'Your client',
          text: "You won't be able to revert this!",
          width: 768,
          height: 1000,
          html: 
            '<div class="blog-main">' +
              '<div class="blog">' +
                '<div class="image-box">' +
                  '<a href="blog-single.html">' +
                    '<img class="img-responsive" src="assets/img/blogs/push-up.jpg" alt="hny-image">' +
                  '</a>' +
                '</div>' +
                '<div class="blog-info">' +
                  '<h4> ' +
                    '<a href="blog-single.html">7 Top Chest Exercises for Men</a>' +
                  '</h4>' +
                  '<ul class="blog-sing">' +
                    '<li>' +
                      '<a href="#">' +
                        '<span class="fa fa-user" aria-hidden="true"></span>by' +
                        'Admin' +
                      '</a>' +
                    '</li>' +
                    '<li>' +
                      '<a href="#">'+
                        '<span class="far fa-heart" aria-hidden="true"></span>6 '+
                        'Likes' +
                      '</a>' +
                    '</li>' +
                    '<li>' +
                      '<a href="#">' +
                        '<span class="fa fa-commenting-o" aria-hidden="true"></span>9 ' +
                        'Comments' +
                      '</a>' +
                    '</li>' +
                  '</ul>' +
                  
                  '<h2 class="heading">Overview</h2>' +
                  '<p>Exercises that define and sculpt your chest help you look your best at the beach or the gym. They can also help you do a variety of daily tasks, like lifting or pushing objects. On top of all that, while you improve your look and strength, you lift your mood, too.</p>' +
                  '<p>Working out the chest means working out the pectoral muscles, better known as the “pecs.” While the pecs are the largest muscles in the chest, there are actually several smaller muscles that support the pectoral muscles, including the latissimus dorsi muscles (or “lats”) on the sides of the chest and the trapezius muscle around the shoulders.</p>' +
                  '<p>Here’s a look at some top exercises to build your strength and size while helping support your overall daily movement.</p>' +

                  '<h2 class="heading">Getting started</h2>' +
                  '<p>Getting started</p>' +
                  '<ul>' +
                    '<li>' +
                      '<span>Press using the flat or incline bench, dumbbells, or bar, or seated machine chest press.</span>' +
                    '</li>' +
                    '<li>' +
                      '<span>Lift using the parallel bars, floor, or bench.</span>' +
                    '</li>' +
                    '<li>' +
                      '<span>Pull using the cable fly bench, dumbbells, or cable crossovers.</span>' +
                    '</li>' +
                  '</ul>' +

                  '<p>If you’re a beginner, meet with a trainer to make sure you are following a good program with proper form during the exercises. Consider starting with a lower weight to reduce your risk of injury. You should be able to pick up the weight without too much strain. Remember, you can always go up in weight if the exercise seems too easy.</p>' +
                  '<p>The number of reps and sets you do depends on your goal: </p>' +
                  '<p>To increase size, try 1 to 3 sets of 8-12 reps for new or intermediate lifters or 3-6 sets of 1-12 reps for seasoned lifters, of a weight that is at the higher end of your 1 rep max. Rest 1-2 minutes with more reps and up to 3 minutes for higher weight, lower rep sets. </p>' +
                  '<p>To increase strength, try 1 to 3 sets of 8-12 reps for new or intermediate lifters or 2-6 sets of 1-8 reps for seasoned lifters, of a weight that is around 60-80 percent of your max, depending on your experience. Rest 1-2 minutes with more reps and up to 3 minutes for higher weight, lower rep sets.</p>' +

                  '<h2 class="heading">1. Barbell bench press</h2>' +
                  '<img src="assets/img/blogs/Barbell-bench-press.gif" alt="">' +
                  '<p class="indent">Equipment needed: barbell</p>' +
                  '<p>1. Position yourself on the bench with your feet firmly on the ground and your back flat (the bar should be directly over your eyes, and your head, shoulders, and buttocks should be on the bench).</p>' +
                  '<p>2. Grasp the barbell with palms forward and thumbs wrapped around the bar. Move the bar into starting position, with help from a spotter if needed.</p>' +
                  '<p>3. Position the bar over your chin or upper chest, keeping your elbows and wrists straight.</p>' +
                  '<p>4. Inhale and lower the bar slowly until it touches your chest below your armpits. As you lower, flare your elbows out slightly.</p>' +
                  '<p>5. Next, exhale and press the bar up, keeping your wrists straight and your back flat.</p>' +

                  '<h2 class="heading">2. Pec deck</h2>' +
                  '<img src="assets/img/blogs/pec-desk.png" alt="">' +
                  '<p>Resist the urge to add extra weight. Doing so could increase your risk of injury. This exercise isn’t for you if you have had a shoulder injury. Here are the steps:</p>' +
                  '<p>1. Keep your feet flat on the floor, at least shoulder-width apart.</p>' +
                  '<p>2. With your back firmly against the seat, lift your arms until they reach shoulder level (the angle of your elbows should be between 75 and 90 degrees). Place your elbows on the center of the pad on the wings of the machine.</p>' +
                  '<p>3. With smooth and slow movement, push the wings together, stopping just before they touch.</p>' +
                  '<p>4. Reverse to the starting position slowly.</p>' +

                  '<h2 class="heading">3. Bent forward cable crossover</h2>' +
                  '<img src="assets/img/blogs/bent-forward-cable.png" alt="">' +
                  '<p class="indent">Equipment needed: high pulley machine</p>' +
                  '<p>1. Begin this exercise either with your feet planted hip-width apart, or with one in front of the other as if you are walking.</p>' +
                  '<p>2. Grasp the pulley handles with your arms straight out and facing inward, making sure that your hands are below your shoulders and your elbows are bent a bit.</p>' +
                  '<p>3. Make your movements slow and controlled — no jerking — as you bring your hands together and extend your arms. For a wider arc and more resistance, move your arms down first and then in toward each other to cross one hand over the other.</p>' +
                  '<p>4. Bring your arms slowly back to the starting position with control. Don’t let your arms go back past the shoulders.</p>' +

                  '<h2 class="heading">4. Chest press</h2>' +
                  '<img src="assets/img/blogs/dumbbell-bench-press.jpg" alt="">' +
                  '<p>1. Adjust the chest press bench so that you sit with knees bent slightly and your feet on the floor.</p>' +
                  '<p>2. Grasp the handles, and exhale as you push them away until your arms are straight out. Keep your elbows slightly bent.</p>' +
                  '<p>3. As you inhale, pull the bars toward you slowly and with control, without letting the weights touch down.</p>' +

                  '<h2 class="heading">5. Inclined dumbbell flies</h2>' +
                  '<img src="assets/img/blogs/incline-dumbell-files.jpg" alt="">' +
                  '<p class="indent">Equipment needed: set of dumbbells</p>' +
                  '<p>1. Take a dumbbell in each hand and lie on a bench, feet firmly on the floor.</p>' +
                  '<p>2. Take a dumbbell in each hand and lie on a bench, feet firmly on the floor.</p>' +
                  '<p>3. Exhale, pull in your abs, and slowly press the dumbbells up directly above your chest. Your arms should be shoulder-width apart. Keep your elbows straight but not locked.</p>' +
                  '<p>4. Inhale and lower the dumbbells slowly in a wide arc until they are level with your chest. Keep the dumbbells parallel.</p>' +
                  '<p>5. “Fly” the dumbbells toward the ceiling in the same gentle arc.</p>'+

                  '<h2 class="heading">6. Dips</h2>' + 
                  '<img src="assets/img/blogs/dips.jpg" alt="">' +
                  '<p>1. Grasp the parallel dip bars firmly and lift your body.</p>' +
                  '<p>2. Keep your elbows straight, your head in line with your trunk, and your wrists in line with your forearms.</p>' +
                  '<p>3. Bring one leg across the other to stabilize the lower part of your body, and pull in your abs.</p>' +
                  '<p>4. Exhale, and bend your elbows to lower your body. Keep your elbows near your sides. Your legs should be directly under your body to avoid tilting or swinging.</p>' +
                  '<p>5. Lower yourself until your elbows are at a 90-degree angle and your upper arms are parallel with the floor. Keep your wrists straight.</p>' +
                  '<p>6. Pause, and then straighten your elbows, pushing into the bars with your hands, and return to starting position. Keep your body vertical and your wrists straight.</p>' +
                  '<p><b>Note: </b>If you have a hard time doing this unassisted, look to see if your gym has a machine that does assisted dips.</p>' +

                  '<h2 class="heading">7. Pushups</h2>' +
                  '<img src="assets/img/blogs/push-up1.jpg" alt="">' +
                  '<p>No equipment at home and no time for gym visits? No problem. The ordinary pushup provides 61 percent chest muscle activation. That’s significantly less than the bench press, but pushups offer convenience and triple the muscle-building benefits: they strengthen your chest, arms, and shoulders.</p>' +
                  '<p>Get the most from your pushups by paying close attention to your form.</p>' +
                  '<p>1. Tighten your abdominals, keep your back flat, your neck in alignment with your spine, and keep your elbows close to your sides.</p>' +
                  '<p>2. With your hands directly under your shoulders, lower yourself slowly and with control.</p>' +
                  '<p>3. stly, press up.</p>' +
                '</div>' +
              '</div>' +
            '</div>',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!',
        }).then((result) => {
          if (result.value) {
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
          }
        });
        break;
      case 'add-tag':
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          width: 768,
          height: 800,
          html: 
          '<div class="col-md-12">' +
            '<div class="ms-panel ms-panel-fh">'+
              '<div class="ms-panel-header">'+
                '<h2>Tag Parent: Parent</h2>' +
              '</div>'+
              '<div class="ms-panel-body clearfix">'+
                '<form class="needs-validation clearfix" novalidate="">' +
                    '<div class="form-row">' +
                        '<div class="col-xl-12 col-md-12 ">' +
                            '<label for="validationCustom06">Post Title</label>' +
                            '<div class="input-group">' +
                                '<input type="text" class="form-control" id="validationCustom08" placeholder="Post Title: " required="">' +
                                '<div class="invalid-tooltip">Please provide a valid city.</div>' +
                            '</div>' +
                        '</div>' +

                        '<div class="col-xl-12 col-md-12">' +
                            '<label for="validationCustom17" data-toggle="tooltip" data-placement="left" title="3 digit number at the back of your card">Post Category </label>' +
                            '<div class="input-group">' +
                                '<select class="form-control" id="validationCustom15" required="">' +
                                    '<option value="">Chest Exercise</option>' +
                                    '<option value="">Back Exercise</option>' +
                                    '<option value="">Leg Exercise</option>' +
                                    '<option value="">Abs Exercise</option>' +
                                    '<option value="">Triceps Exercise</option>' +
                                '</select>' +
                            '</div>' +
                        '</div>' +

                        '<div class="col-md-12">' +
                            '<label for="validationCustom12">Description</label>' +
                            '<div class="input-group">' +
                              '<textarea rows="5" id="validationCustom12" class="form-control" required=""></textarea>' +
                            '</div>' +
                        '</div>' +

                        '<div class="col-lg-12">' +
                            '<div class="ms-panel-header">' +
                                '<div class="ms-panel-custom">' +
                                    '<h6>Status Available</h6>' +

                                    '<ul class="ms-list ms-list-display">' +
                                        '<li class="mb-0">' +
                                            '<label class="ms-switch">' +
                                                '<input type="checkbox" checked="" id="check-status-box">' +
                                                '<span class="ms-switch-slider ms-switch-primary round"></span>' +
                                            '</label>' +
                                        '</li>' +
                                    '</ul>' +
                                '</div>' +
                                '<a href="#" class="" id="check-status-text"><span class="ms-text-primary">Active</span></a>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                '</form>' +
              '</div>'+
            '</div>'+
          '</div>',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!',
        }).then((result) => {
          if (result.value) {
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
          }
        });
        break;
      default:
        Swal.fire('The Internet?', 'That thing is still around?', 'question');
        break;

    }
  });
})(jQuery);
