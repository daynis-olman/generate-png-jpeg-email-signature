# Generates JPEG or PNG email signatures from HTML form submission
- Simple PHP APP that generates downloadable JPEG or PNG email signature images 
- App first retrieves a placeholder `baseline-image` containing only the company logo
- App will then write pre-processed webform data to placeholder image to create an individual email signature
- Final signature image will be downloaded as `signature.zip` 
- App includes `baseline_image.psd` source file to allow for existing template modification

<img src="images/application-diagram-2.png?raw=true" width="756" height="209">

# Live demo
[Live application demo](https://emailsignature.naturalwayofliving.com/)

# Application diagram + more details
<img src="images/application-diagram.png?raw=true" width="650" height="200">

- Step 1a: For `.PNG` image user completes HTML form `index.html` (Name, Email, Role, Phone)
- Step 1b: For `.JPEG` image user completes HTML form `index-generate-jpeg-version.html` 
- Step 2: User clicks "Download Email Signature"
- Step 3: Webform POSTs data to `generate_png_email_signature.php` or 'generate_jpeg_email_signature.php'
- Step 4: PHP file will write user submitted data onto a blank template image containing company logo
- Step 5: Email signature `.jpeg` or `.png` inside a .ZIP archive will be downloaded

Application does not require build or compile and will work on any server with PHP. Application has no dependencies and is written in procedural Core PHP
