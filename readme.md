## Gravity Forms Entry QR Code Generator
A simple WordPress plugin that generates QR codes for entries in Gravity Forms - just feed an entry ID into the generate script and it'll generate a url QR code that will open the entry in your WP dashboard. Useful for if your gravity form entries are 'tickets' for events, and you want to quickly check a code for its corresponding entry.

To embed a QR code, just create an image tag with the `src` set to `https://MYSITE.COM/wp-content/plugins/gravity-qr/generate.php?entry=123456789` where you of course replace your domain and enter the appropriate entry ID into the entry parameter. This is easiest to add to a form notification email, so that a user can pull up their confirmation email and allow someone to scan their QR code.

*****
Developed with love by [James Pederson](https://jpederson.com).