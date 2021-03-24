## QR Code Generator
A simple WordPress plugin that generates QR codes in WordPress - just feed your data into an image URL and it'll generate QR code to embed anywhere you like.

### Install
Just clone this into your plugins folder, like so:

```
cd wp-content/plugins/
git clone https://github.com/wp-pure/qr
```

### Inside a Gravity Form Confirmation Message
To embed a QR code in a confirmation email from any Gravity Form, paste the following into the 'Text' editor for that confirmation:

```
<img src="https://MYSITE.COM/wp-content/plugins/qr/generate.php?data={entry_url}" />
```

Do remember to replace the `MYSITE.COM` part with your actual domain name, and everything will just work.

### General QR Code Generation
You can also use this to generate ANY QR code you like - just feed the content of that QR code into the `data` parameter of the URL, and it'll generate the QR code for you.

*****
Developed with love by [James Pederson](https://jpederson.com).