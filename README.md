# Generates JPEG email signatures from HTML form submission
- Simple PHP APP that generates downloadable JPEG email signature images 
- App first retrieves a placeholder `baseline-image.jpg` containing only the company logo
- App will then write pre-processed webform data to placeholder image to create an individual email signature
- Final signature image will be downloaded as `signature.zip` 

<img src="images/application-diagram-2.png?raw=true" width="756" height="209">

# Live demo
[Live application demo](https://emailsignature.naturalwayofliving.com/)

# Application diagram + mroe details:
<img src="images/application-diagram.png?raw=true" width="650" height="200">

- Step 1: User completes HTML form `index.html` (Name, Email, Role, Phone)
- Step 2: User clicks "Download Email Signature"
- Step 3: Webform submits form data via POST to `generate-signature.php`
- Step 4: PHP file will write user submitted data onto a blank image with company logo
- Step 5: Email signature `.jpeg` inside a .ZIP archive will be downloaded

Application does not require build or compile and will work on any server with PHP. Application has no dependencies and is written in procedural PHP
