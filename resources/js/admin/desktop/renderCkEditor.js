import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

export let renderCkEditor = () => {

    //Es un evento personalizado que se dispara cuando se renderiza el formulario
    document.addEventListener("renderFormModules", (event => {
        renderCkEditor();
    }), { once: true });

    window.ckeditors = [];

    document.querySelectorAll('.ckeditor').forEach(ckeditor => {

        ClassicEditor.create(ckeditor, {

                toolbar: {
                    items: [
                        'bold',
                        'italic',
                        'link',
                        'bulletedList',
                        'numberedList',
                        '|',
                        'outdent',
                        'indent',
                        '|',
                        'blockQuote',
                        'undo',
                        'redo'
                    ]
                }
            })
            .then(classicEditor => {
                ckeditors[ckeditor.name] = classicEditor;
            })
            .catch(error => {
                console.error(error);
            });
    });
}








// import ClassicEditor from '@ckeditor/ckeditor5-build-classic';


// export let renderCkEditor = () => {



//     let editors = document.querySelectorAll('.ckeditor');


//     editors.forEach(editor => {

//         ClassicEditor.create(editor)

//         .then(editor => {
//                 window.editor = editor;

//             })
//             .catch(error => {
//                 console.error('There was a problem initializing the editor.', error);
//             });
//     });
// }