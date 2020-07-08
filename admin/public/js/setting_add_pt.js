var pt = new Pt('1', '', []);
var current_skill_id = -1;
var amount_skill = 0;
//Add new input skill 
$(document).on("blur", 'li.ms-skill:last-child input.input-skill', function() {
    var skill_tilte = $(this).val();
    if(skill_tilte != ''){
        amount_skill++;
        $('ul.ms-skill-list').append('<li class="ms-skill">' +
                                    '<input type="text" class="input-skill">'+
                                    '<span class="text-danger remove-skill" data-skill-id="' + amount_skill + '"><i class="far fa-times-circle"></i></span>' +
                                '</li>');
        $(this).parent().children('span.remove-skill').css('display', 'block');
        
        amount_skill--;
        var pt_skill = new PtSkill(amount_skill, skill_tilte, 10);
        pt.pt_skill.push(pt_skill);
        
//        Add input value skill
        $('#skill-box').append('<div class="process-skill" data-skill-id="' + amount_skill + '"><span class="progress-label">' + skill_tilte + '</span>'+
                                    '<span class="progress-status">10%</span>'+
                                    '<div class="progress progress-tiny">'+
                                        '<div class="progress-bar bg-primary" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>'+
                                    '</div></div>');
        amount_skill++;
    }  
})

//Remove input skill 
$(document).on("click", 'span.remove-skill', function() {
    var amount_input_skill = $('li.ms-skill').length;
    if(amount_input_skill > 1){
        $(this).parent().remove();
        var skill_id = $(this).attr('data-skill-id');
//            alert(skill_id);
        $('div[data-skill-id="' + skill_id + '"]').remove();
        
        for(var i = 0; i < pt.pt_skill.length; i++){
            if(pt.pt_skill[i].pt_skill_id == skill_id){
                pt.pt_skill.splice(i, 1); 
                break;
            }
        }
    }
//    console.log(pt);
})

//Choose process skill
$(document).on("click", 'div.process-skill', function() {
   current_skill_id = $(this).attr('data-skill-id');
//   alert(current_skill_id);
   
})

//Add val skill
$('button.add-val-skill').click(function(){
//    $('span.irs-single').text()
    var skill_val = $('span.irs-single').text();
    $('div.process-skill[data-skill-id="' + current_skill_id + '"] span.progress-status').text(skill_val + '%');
    $('div.process-skill[data-skill-id="' + current_skill_id + '"] div.progress-bar').css('width', skill_val + '%');
    
    alert(pt.pt_skill.length);
    for(var i = 0; i < pt.pt_skill.length; i++){
        if(pt.pt_skill[i].pt_skill_id == current_skill_id){
            pt.pt_skill[i].pt_skill_val = skill_val;
            break;
        }
    }
//    console.log(pt);
//    alert($('span.irs-single').text());
})

//Choose value skill
$(".my-range").ionRangeSlider({
    skin: 'modern'
});


//alert($('span.irs-single').text());

