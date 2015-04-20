$(function(){
    $("textarea.tinymce").tinymce({
        language: "cs",
        theme: "modern",
        mode: "specific_textareas",
        width: 800
    }
    ).closest("form").submit(function(){
        tinyMCE.triggerSave();    
    });
});


