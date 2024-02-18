# Form Grabber

Easy way to collect data from inputs, send to the server and handle response.  
Componens are compiled with webpack to single files:
```bash
public/form-grabber-bundle.css
public/form-grabber-bundle.js
```
Run compilation:
```bash
npx mix
```

## Usage 

Add scripts:
```html
<!--- Form grabber library: ---->
<link href="{{URL::to('/')}}/form-grabber-bundle.css" rel="stylesheet">
<script src="{{URL::to('/')}}/form-grabber-bundle.js"></script>
```

Set base:
```html
<base href="{{URL::to('/')}}">
```

Copy templates from folder: **view/forms.**

Create file .js with extends class:
```js
class MainInfo extends FormGrabber
{
    beforeSend() {}
    onSuccess(json) {}
    onError(error) {}
}

try {
    let mainInfo = new MainInfo({
        // "debug": true,
        'button_id': "my_info_button",
        // 'switch_button_id': "waiting_button",
        'input_ids': [],
        'method': "PATCH",
        'endpoint': document.getElementsByTagName("base")[0].href + "api/test-form-input"
    })
} catch (e) {
    console.log('Error while creating form listener: ', e)
}
```

Tamila Ambeon
