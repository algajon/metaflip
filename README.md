# MetaFlip Front-End/Style/API

MetaFlip aims to enable users to make trust-free purchases using Ethereum for selling digital and virtual products. The API functions as an Ethereum payment method, presented to users in a new `<about blank>` page. It utilizes the MetaMask wallet to confirm payment completion or failure. The repository employs semantic HTML, TailwindCSS, Javascript, and Solidity.

## Repository Contents

- Solidity version: 0.8.18
- Package versions:
  - "ethers": "^6.7.1"
  - "hardhat": "^2.17.1"
  - "http-server": "^14.1.1"
  - "tailwindcss": "^3.3.3"

## Package Requirements

- **Git:** Ensure that Git is installed correctly by running the command:
  git --version

- **MetaMask:** This browser extension facilitates blockchain interactions.

- **Node.js:** Confirm correct Node.js installation by running:
  node --version
  You should see an output like: `vX.X.X`

- **Yarn:** Verify Yarn installation by running:
  yarn --version
  You should see an output like: `X.X.X`
  If needed, you can install it using npm with the following command:
  npm install -g yarn

## Patch 0.5: Changes

- Added Solana as Payment Method, through the Phantom Chrome Extension, next to Metamask.
- Changed navigation bar to have card effects for logo, search bar, sign up that leads to signup.html, login button, interactive menu with options “Profile”, “Settings” and “Log Out”.
- Added signup.html, coded page to include a Sign Up form, an “Agree to newsletter” tick, an “Agree to terms and conditions” tick, designed to look slightly different from the main page.
- Added “loading screen” in light blue which stays until page loads every element.
- Added new paragraph to landing page, with NFT image example to the side.
- Added page-wide carousel with 3 image intakes, meant for higher resolutions, with interactive clickable “left” and “right” arrows, 3 clickable circles to choose which image to display, ease-out transitions automatically.
- Centered and designed modals, gave them 3 intake parameters; “Product Desc”, “Product Name”, “Product Image”. Modals now have card effect.
- Pay Now button now opens up the Phantom Chrome Extension, which asks for a login.
- Added mobile menu that has the same popup as the “Menu” button, but resized for smaller resolutions.
- Added new paragraph to landing page “Reselling platform of certified products” to serve as “About” section.
- “Sign Up” paragraph that is connected to signup.html, and register.php (work in progress).

## 25.10.23 Patch 0.6

Added new Laravel version of repository, within the branch named "laravel".

This version of the Metaflip repository has added "login" and "register" options, which, given the route, pushes the data directly to a MySQL database named "metaflip," to a table called "users" containing the "FullName," "email," and "passwords" (either as typed or encrypted) within the database.

### Includes views:

- Login
- Register
- Home, with their own respective layout in the "include" folder.

### Controllers:

- UserController, for functions such as showWelcomePage() which returns the home page, login() which returns the login view, register() which includes the register view for creating new accounts; ImageController for using images as assets within the public folder.

### Models:

- User.php, which contains the base Laravel Users configurations, with added protected table $users, containing all the registered accounts within the website so far.

## 27.10.23 Patch 0.7

Added updates for User Permissions using Spatie, Providers, Product Model, Password and Login Authentication, Account Registration, Views:

### Includes views:

- /passwords/ Includes 3 new .php files(login, register, verify) that serve as login and registration forms, extending the layout.app for headers and footers. The forms come with placeholder password reset options, email verifications, "Remember Me" triggers, are csrf protected, require 8 characters in a password and an email address that is not already in use.
- /products/ Includes 4 new .php files(create, edit, index, show) that serve to add new products to the page, currently only placeholder code is written, but through these views, SuperUser will be able to do CRUD operations, and edit the cost of Ethereum for each product(still work in progress).
- /roles/ Includes the same operations as the /products/ , instead it is used as a graphical UI for editing User Permissions.
- /users/ Includes the same operations as the two above, instead it is used as a graphical UI for giving Users new permissions, SuperAdmin with product edit permissions.
- The home view remains the same.
- Header now has responsive design; If logged in it shows user First Name and Last Name, with a logout button under it that redirects to /login/, If not logged in there are Login and SignUp buttons redirecting to the forms stated above.

### Routes:

- Routes now import 'roles', 'users' and 'products' from their respective Controllers.
- Added 'logout' route.
- Api now can contain routes for registering API apps, also handles User Requests.

### Controllers:

- /Auth/ contains Controllers for ConfirmPassword, ForgotPassword, LoginController, RegisterController, ResetPasswordController and VerificationController.
- ConfirmPassword uses ConfirmPasswords method, if the intended URL fails it redirects users to Home.
- ForgotPassword uses SendsPasswordResetEmails method(not fully implemented).
- LoginController is for authenticating users for the application and redirecting them to Home.
- ResetPassword is for handling password reset requests.
- Verification handles email verification for any user that recently registered with the app, emails can also be resent.

### Models:

- User.php now contains casts for when an email was verified and password.
- Added Product.php which contains fillable elements for name, description and ethCost.

###

###

## 31.10.23 Patch 0.8
- Added TailwindUI components, changed page layout and much more!

## 01.11.23 Patch 0.8.1

- Added components for login and registration forms and wallet connection.
- Added 'contracts' folder for holding .sol files and smart contracts.

#

As always, feel free to reach out if you have any questions or require further assistance!
