# Generates JPEG email signatures from HTML form submission
- Simple PHP APP that generates downloadable JPEG email signature images 
- App first retrieves a placeholder `baseline-image.jpg` containing only the company logo
- App will then write pre-processed webform data to placeholder image to create an individual email signature
- Final signature image will be downloaded as `signature.zip` 

<img src="images/application-diagram-2.png?raw=true" width="756" height="209">

# Live demo
[Live application demo](https://emailsignature.naturalwayofliving.com/)

# Application diagram + more details
<img src="images/application-diagram.png?raw=true" width="650" height="200">

#### Generate PNG email signatures

- Step 1: User completes HTML form `index.html` (Name, Email, Role, Phone)
- Step 2: User clicks "Download Email Signature"
- Step 3: Webform submits form data via POST to `generate_png_email_signature.php`
- Step 4: PHP file will write user submitted data onto a blank image with company logo
- Step 5: Email signature `.png` inside a .ZIP archive will be downloaded

#### Generate JPEG email signatures

- Step 1: User completes HTML form `index-generate-jpeg-version.html` (Name, Email, Role, Phone)
- Step 2: User clicks "Download Email Signature"
- Step 3: Webform submits form data via POST to `generate_jpeg_email_signature.php`
- Step 4: PHP file will write user submitted data onto a blank image with company logo
- Step 5: Email signature `.jpeg` inside a .ZIP archive will be downloaded

#### Making your own email signature

- Step 1: Open template source file `baseline_image.psd` with photoshop or other app
- Step 2: Make modifications as required
- Step 3: Generate new baseline template images from `.PSD` Source
- Step 4: Save above images as `images/baseline_image.jpg` or `images/baseline_image.png`
- Step 4: Try running the app and generating a new email signature
- Step 5: Text Calibration can be adjusted by changing `angle`, `x`, `y` in `imagettftext`   

Application does not require build or compile and will work on any server with PHP. Application has no dependencies and is written in procedural PHP
