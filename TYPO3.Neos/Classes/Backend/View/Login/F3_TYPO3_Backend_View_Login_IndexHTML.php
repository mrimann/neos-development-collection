<?php
declare(ENCODING = 'utf-8');
namespace F3::TYPO3::Backend::View::Login;

/*                                                                        *
 * This script is part of the TYPO3 project - inspiring people to share!  *
 *                                                                        *
 * TYPO3 is free software; you can redistribute it and/or modify it under *
 * the terms of the GNU General Public License version 2 as published by  *
 * the Free Software Foundation.                                          *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        */

/**
 * @package TYPO3
 * @subpackage Backend
 * @version $Id$
 */

/**
 * The TYPO3 Backend Login View
 *
 * @package TYPO3
 * @subpackage Backend
 * @version $Id$
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 */
class IndexHTML extends F3::FLOW3::MVC::View::AbstractView {

	/**
	 * Renders the view
	 *
	 * @return string The rendered view
	 */
	public function render() {
		$baseURI = $this->request->getBaseURI();

		return '<!DOCTYPE html
					 PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
					 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<?xml version="1.0" encoding="utf-8"?>

			<html>
				<head>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
					<meta name="generator" content="TYPO3, http://typo3.org, &#169; The TYPO3 Development Team" />
					<title>TYPO3 Login</title>
					<base href="' . $baseURI .'" onload="document.getElementById(\'username\').focus();" />
					<style type="text/css">
						body, div, form {
							background-color: #4E4949;
							margin: 0;
							padding: 0;
						}
						#loginscreen {
							width: 1024px;
							height: 768px;
							background-image: url(Resources/Web/TYPO3/Public/Backend/Media/Images/Login/MockLoginScreen.png);
							background-repeat: no-repeat;
							background-position: center;
						}
						#username {
							background-color: transparent;
							position: absolute;
							top: 407px;
							left: 340px;
							width: 180px;
							border: none;
						}
						#password {
							background-color: transparent;
							border: none;
							position: absolute;
							top: 448px;
							left: 340px;
							width: 180px;
						}
						#loginbutton {
							position: absolute;
							top: 479px;
							left: 325px;
							width: 85px;
							border: none;
							background-color: transparent;
						}

						</style>
				</head>
				<body>
					<div id="loginscreen">
						<form action="typo3" method="post" name="loginform">
							<input type="text" id="username" name="F3::FLOW3::Security::Authentication::Token::UsernamePassword::username" value="" tabindex="1" />
							<input type="password" id="password" name="F3::FLOW3::Security::Authentication::Token::UsernamePassword::password" value="" tabindex="2" />
							<input type="submit" id="loginbutton" name="submitlogin" value="" tabindex="3" />
						</form>
					</div>
				</body>
			</html>
		';
	}
}

?>