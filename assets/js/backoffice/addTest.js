$(document).ready(function(){

    CKEDITOR.replace( 'descEditor',{
        height:'200',
        toolbar:[
                   ['Styles','Format','Font','FontSize'],
                   ['Bold','Italic','Underline','StrikeThrough','-','Undo','Redo','-','Cut','Copy','Paste','Find','Replace','-','Outdent','Indent','-','Print'],
                   ['NumberedList','BulletedList','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
                   ['Link','TextColor','BGColor','Source','Maximize']
                ],
        resize_enabled:false,        
    });

    $(document).on('click','.add',function(){
      element = $('.'+$(this).attr('data-element')).clone().removeClass('hide').removeClass(''+$(this).attr('data-element'));
      before = $(this).attr('data-before');
      $(this).closest('.'+before).before(element);
    });

    $(document).on('click','.delete',function(){
      element = $(this).attr('data-element');
      $(this).closest('.'+element).fadeOut('fast',function(){
        $(this).remove();
      });
    });

    $(document).on('submit','form[name="testSectionFrom"]',function(){
      data = {
        'sectionName':'',
        'subSection':[],
        'subSectionType':[],
        'pmarks':[],
        'nmarks':[]
      };
      $.each($(this).serializeArray(), function(i, field) {
        if(field.name == 'sectionName')
          data[field.name] = field.value;
        else
          data[field.name].push(field.value);
          
      });
      testData = $('input[name="testData"]').val();
      if (testData == '') {
        testData = {};
      }
      else{
        testData = $.parseJSON(testData);
      }
      testData[''+data.sectionName] = JSON.stringify(data);
      $('input[name="testData"]').val(JSON.stringify(testData));     
      section = '';
      rowspan = data.subSection.length;
      $.each(data.subSection,function(key,value){
        if(key == 0){
          section +=  '<tr class="'+data.sectionName+'"><td rowspan="'+rowspan+'">'+data.sectionName+'</td><td>'+value+'</td><td>'+data.subSectionType[key]+'</td><td>'+data.pmarks[key]+'</td><td>'+data.nmarks[key]+'</td><td rowspan="'+rowspan+'" class="text-center"><a title="View" href="javascript:" class="btn btn-default" data=\''+JSON.stringify(data)+'\'><span class="glyphicon glyphicon-list-alt"></span></a></td><td rowspan="'+rowspan+'" class="text-center"><a title="Edit" href="javascript:" class="btn btn-primary" data=\''+JSON.stringify(data)+'\'><span class="glyphicon glyphicon-pencil"></span></a></td><td rowspan="'+rowspan+'" class="text-center"><a title="Delete" href="javascript:" class="btn btn-danger del" data=\''+JSON.stringify(data)+'\'><span class="glyphicon glyphicon-trash"></span></a></td></tr>'; 
        }
        else{
          section +=  '<tr class="'+data.sectionName+'"><td>'+(value)+'</td><td>'+data.subSectionType[key]+'</td><td>'+data.pmarks[key]+'</td><td>'+data.nmarks[key]+'</td></tr>';           
        }
      });
      $('.secAndSubsec tbody').append(section);
      $('#addSection').modal('toggle');
    });

    $(document).on('click','.secAndSubsec .del',function(){
      if (!confirm('Delete Section ?')) {return;}
      sectionName = $.parseJSON($(this).attr('data')).sectionName;
      data = $.parseJSON($('input[name="testData"]').val());
      delete data[sectionName];
      $('input[name="testData"]').val(JSON.stringify(data));
      $(this).closest('table').find('tr.'+sectionName).fadeOut('fast',function(){
        $(this).remove();
      });
    });

    $(document).on('click','.addSectionButton',function(){
      $('#addSection .modal-body').html($('.testSectionFormContent').clone().removeClass('testSectionFormContent hide'));
      $('#addSection').modal('show');      
    });

    $(document).on('submit','form[name="testFrom"]',function(e){
      console.log($('textarea[name="description"]').val());
      e.preventDefault();
    });
});