/**
 * https://github.com/quilljs/awesome-quill - useful staff for Quill
 * https://docs.dropzone.dev/getting-started/installation/stand-alone
 */
var TextEditors = (function() {
    let instance

    function createInstance() {
        return {
            editors: [],

            quillDefaultOptions: {
                modules: { 
                    //toolbar: false
                    
                    toolbar: [
                        [{ 'align': [] }],
                        ['bold', 'italic', 'underline'],
                        [{ 'header': [1, 2, 3, false] }],
                        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                        ['blockquote', 'code-block'],
                        ['link', 'image', 'video'],
                        [{ 'color': [] }, { 'background': [] }],
                        ['clean']
                    ]
                        
                },
                placeholder: '...',
                theme: 'snow'
            },

            showMessage: function () {
                console.log("editors", this.editors);
            },

            createQuill(id, param = {
                readonly: false
            })
            {
                if(param.hasOwnProperty("readonly")) {
                    if(param.readonly) {
                        this.quillDefaultOptions.modules.toolbar = false
                    }
                }
                
                let editor = new Quill('#' + id, this.quillDefaultOptions)  
                
                if(param.hasOwnProperty("readonly")) {
                    if(param.readonly) {
                        editor.disable()
                    }
                }
                
        
                let imageHandler = function() {
                    var range = this.quill.getSelection()
                    var value = prompt('Встав URL на зображення:')
                    if(value) {
                        this.quill.insertEmbed(range.index, 'image', value, Quill.sources.USER)
                    }
                }

                let videoHandler = function()  {
                    let url = prompt("Enter Video URL: ");
                    url = getVideoUrl(url);
                    let range = this.quill.getSelection();
                    if (url != null) {
                        this.quill.insertEmbed(range, 'video', url);
                    }
                }
                
                function getVideoUrl(url) {
                    let match = url.match(/^(?:(https?):\/\/)?(?:(?:www|m)\.)?youtube\.com\/watch.*v=([a-zA-Z0-9_-]+)/) ||
                        url.match(/^(?:(https?):\/\/)?(?:(?:www|m)\.)?youtu\.be\/([a-zA-Z0-9_-]+)/) ||
                        url.match(/^.*(youtu.be\/|v\/|e\/|u\/\w+\/|embed\/|v=)([^#\&\?]*).*/);
                    // console.log("video id: ", match[2]);
                    if (match && match[2].length === 11) {
                        return ('https') + '://www.youtube.com/embed/' + match[2] + '?showinfo=0';
                    }
                    if (match = url.match(/^(?:(https?):\/\/)?(?:www\.)?vimeo\.com\/(\d+)/)) { // eslint-disable-line no-cond-assign
                        return (match[1] || 'https') + '://player.vimeo.com/video/' + match[2] + '/';
                    }
                    return null;
                }

                if(editor.getModule('toolbar') !== undefined) {
                    editor.getModule('toolbar').addHandler('image', imageHandler)
                    editor.getModule("toolbar").addHandler("video", videoHandler)
                }

                this.editors.push({
                    "id": id,
                    "type": "quill",
                    "options": this.quillDefaultOptions,
                    "core": editor
                })
            },

            setContent(id, text) {
                
                let editor = this.findEditorById(id)

                if(editor) {

                    // Delra object here:
                    if(editor.type == "quill") {

                        if(this.isJson(text)) {
                            return editor.core.setContents(JSON.parse(text))
                        } else {
                            console.log("Quill editor:", "Value is not valid json.")
                        }

                        
                       // editor.core.disable()
                        
                    }

                    return
                }

                console.error("Text Editor with id#" + id + " not found!")
                return false
            },

            getContent(id) {
                
                let editor = this.findEditorById(id)

                if(editor) {
                    if(editor.type == "quill") {
                        return JSON.stringify(editor.core.getContents())
                    }

                    return
                }
                console.error("Text Editor with id#" + id + " not found!")
                return false
             },

            findEditorById(id) {

                let result = this.editors.find( (item) => {
                    return item.id == id
                })

                if(result !== undefined) {
                    return result
                }

                return false
            },

            isJson(str) {
                try {
                    JSON.parse(str);
                } catch (e) {
                    return false;
                }
                return true;
            }
        }
    } 

    return {
        getInstance: function() {
            if (!instance) {
                instance = new createInstance()
            }
            return instance;
        }
    }
})()


/**
 * 
 */
class FormGrabber
{
    debug = false
    version = "1.0"
    requiredFields = ['button_id','input_ids','method','endpoint']

    params = null
    buttonId = null 
    buttonElement = null
    switchButtonElement = null
    formData = null

    /**
     * 
     */
    constructor(params) 
    {
        if(!this.hasValid(params)) {
            return
        }

        this.params = params

        this.registerButton()
    }

    /**
     * 
     */
    hasValid(params)
    {
        for (const propertyName of this.requiredFields) {
            if(!params.hasOwnProperty(propertyName)) {
                console.error("--> " + propertyName + " param is required!")
                console.error("Your params: ", params)
                return false
            }
        }

        if(params.hasOwnProperty("debug")) {
            this.debug = params.debug
        }

        return true
    }

    /**
     * 
     */
    registerButton()
    {
        this.buttonElement = document.getElementById(this.params.button_id)

        if(this.buttonElement == undefined) {
            console.error("Cannot find button element with id: ", this.params.button_id)
            return
        }

        if(this.debug) console.log("Button #" + this.params.button_id + " was registered successfully.")

        // Якщо вказаний ідентифікатор кнопки для заміни:
        if(this.params.hasOwnProperty("switch_button_id")) {
            this.switchButtonElement = document.getElementById(this.params.switch_button_id)

            if(this.switchButtonElement == undefined) {
                console.error("Cannot find switch button element with id: ", this.params.switch_button_id)
                return
            }

            if(this.debug) console.log("Switch button #" + this.params.switch_button_id + " was registered successfully.")
        }

        


        this.registerButtonListener()
    }

    /**
     * 
     */
    registerButtonListener()
    {
        this.buttonElement.addEventListener("click", (element) => { 

            if(this.switchButtonElement != null) {
                this.toggleButtonVisibility()
            }

            if(this.debug) console.log("Button #" + this.params.button_id + " was clicked.")
            this.formData = new FormData()
            this.grabInputs()
        })

        if(this.switchButtonElement != null) {
            if(this.switchButtonElement != undefined) {
                this.switchButtonElement.addEventListener("click", (element) => { 
                    if(this.debug) console.log("Button #" + this.params.button_id + " was clicked.")
                })
            }
        }
    }

    /**
     *  Trigger form processing:
     */
    grabInputs()
    {
        for (const inputId of this.params.input_ids) {
            
            // Спершу зчитую дані текстових редакторів:
            if (typeof TextEditors != "undefined") {

                let editor = TextEditors.getInstance().findEditorById(inputId)

                if(editor) {
                    let editorContent = TextEditors.getInstance().getContent(inputId)

                    if(editorContent !== false) {
                        if(this.debug) console.log("found text editor: ",inputId,  editorContent)
                        this.formData.append(inputId, JSON.stringify(editorContent))
                    }

                    // Якщо вказаний ід належить текстовому редактору, то далі не перевіряємо:
                    continue
                }


            } else {
                console.error("TextEditors singleton not found.")
            }

            // Далі зчитую вміст поля з вказаним ід:
            let element = document.getElementById(inputId)
            
            // Якщо елемент з ID знайдено:
            if(element != undefined) {
                this.formData.append(inputId, element.value)
            } else {
                // Якщо не знайдено, тоді
                // Намагаюсь знайти елементи з class:
                let elements = document.getElementsByClassName(inputId + "-input")
                if(elements.length > 0) {
                    for (let element of elements) {
                        if(element.checked) {
                            this.formData.append(inputId + '[]', element.value)
                        }
                    }                
                } else {
                    console.error("Input with id#" + inputId + " not found.")
                }
                
            }
            
        }

        if(this.debug) {
            for (const pair of this.formData.entries()) {
                console.log(`${pair[0]}, ${pair[1]}`);
            }
        }

        this.getRequestOptions()
    }

    /**
     * 
     */
    toggleButtonVisibility() 
    {
        if(this.buttonElement != null) {
            if(this.buttonElement.classList.contains('d-none')) {
                this.buttonElement.classList.remove('d-none')
            } else {
                this.buttonElement.classList.add('d-none')
            }
        }

        if(this.switchButtonElement != null) {
            if(this.switchButtonElement.classList.contains('d-none')) {
                this.switchButtonElement.classList.remove('d-none')
            } else {
                this.switchButtonElement.classList.add('d-none')
            }
        }
    }


    /**
     *  
     */
    getRequestOptions()
    {
        if(this.params.method.toUpperCase() == "PATCH") {
            this.formData.append('_method', 'PATCH')
        }

        if(this.params.method.toUpperCase() == "DELETE") {
            this.formData.append('_method', 'DELETE')
        }

        this.beforeSend()
        this.send()
    }

    beforeSend() {}

    /**
     * 
     */
    async send(request)
    {
        try {
            const response = await fetch(this.params.endpoint, {
                method: "POST",
                body: this.formData
            })

            if (!response.ok) {
                throw Error(response.statusText)
            }


            let json = await response.json().then( (json) => {
                return json
            }).catch( (error) => {
                console.error("Server response is not JSON.", error)
            })

            this.toggleButtonVisibility()

            this.onSuccess(json)
            
            Toastify({
                text: "Запит виконано!",
                duration: 1500,
                gravity: "bottom",
                close: true,
                gravity: "bottom", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                  background: "linear-gradient(135deg, rgb(80 181 39), rgb(62 195 53)",
                },
                onClick: function(){} // Callback after click
              }).showToast()

        } catch (e) {
            this.onError(e)
            this.toggleButtonVisibility()

            Toastify({
                text: "Сталась помилка. Деталі в консолі",
                duration: 1500,
                gravity: "bottom",
                close: true,
                gravity: "bottom", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                  background: "linear-gradient(135deg, #ef3e4e, #c13d3d)",
                },
                onClick: function(){} // Callback after click
              }).showToast()

        }
    }

    onSuccess(json) {}
    onError(e)  {}
}



