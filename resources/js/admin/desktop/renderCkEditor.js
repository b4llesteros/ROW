import ClassicEditor from '@ckeditor/ckeditor5-build-classic';


export let renderCkEditor = () => {

    let editors = document.querySelectorAll('.ckeditor');


        editors.forEach( editor => {

            ClassicEditor.create(editor)
            
            .then( editor => {
                window.editor = editor;
                
            })
            .catch( error => {
                console.error( 'There was a problem initializing the editor.', error );
            } );
        }
    );
}

