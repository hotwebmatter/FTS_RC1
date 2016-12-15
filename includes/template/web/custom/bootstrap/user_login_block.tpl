{*                  %%%copyright%%%
 *
 * FusionTicket - ticket reservation system
 *  Copyright (C) 2007-2013 FusionTicket Solution Limited . All rights reserved.
 *
 * Original Design:
 *	phpMyTicket - ticket reservation system
 * 	Copyright (C) 2004-2005 Anna Putrino, Stanislav Chachkov. All rights reserved.
 *
 * This file is part of FusionTicket.
 *
 * This file may be distributed and/or modified under the terms of the
 * "GNU General Public License" version 3 as published by the Free
 * Software Foundation and appearing in the file LICENSE included in
 * the packaging of this file.
 *
 * This file is provided AS IS with NO WARRANTY OF ANY KIND, INCLUDING
 * THE WARRANTY OF DESIGN, MERCHANTABILITY AND FITNESS FOR A PARTICULAR
 * PURPOSE.
 *
 * Any links or references to Fusion Ticket must be left in under our licensing agreement.
 *
 * By USING this file you are agreeing to the above terms of use. REMOVING this licence does NOT
 * remove your obligation to the terms of use.
 *
 * The "GNU General Public License" (GPL) is available at
 * http://www.gnu.org/copyleft/gpl.html.
 *
 * Contact help@fusionticket.com if any conditions of this licencing isn't
 * clear to you.
 *}<!-- $Id$ -->
{if $smarty.post.action eq 'login'}
	{user->login username=$smarty.post.username password=$smarty.post.password uri=$smarty.post.uri}
{elseif $smarty.get.action eq 'logout'}
	{user->logout}
{/if}

{if $user->logged}
  {$vermenu=[['href'=>'index.php?action=person_user', 'title'=>"{!person_user!}"],
             ['href'=>'index.php?action=person_orders', 'title'=>"{!person_orders!}"],
             ['href'=>'index.php?action=logout', 'title'=>"{!logout!}"]]  scope='root'}
                        <form class="form-signin">
                                <h3 class="t">{!member!}</h3>
                                <div>
                                  {!welcome_patron!} {$user->user_firstname} {$user->user_lastname}
                                </div>
                             		<div class="cleared"></div>
                        </form>
{else}
                        <form class="form-signin">
                          <div class="row row-login row-login-top">
                              <h2 class="form-signin-heading">Hello.</h2>
                              <form action="{$_SHOP_root}index.php" id='login-form' name='' method='post' class='loginform' enctype='application/x-www-form-urlencoded'>
                                {ShowFormToken name='login-form'}
                                <input type="hidden" name="action" value="login">
                                <input type="hidden" name="type" value="block">
                                <div class="form-group">
                                {if $smarty.get.action neq "logout" and $smarty.get.action neq "login"}
                                <input type="hidden" name="uri" value="{$smarty.server.REQUEST_URI}">
                                {/if}
                                </div>
                                <div class="form-group">
                                <label for="modlgn-username">{!email!}</label>
                                <input type='email' id="modlgn-username" name='username' class="form-control" placeholder="Email address" required autofocus>{printMsg key='loginusername'}
                                </div>
                                <div class="form-group">
                                <label for="modlgn-passwd">{!password!}</label>
                                <input type='password' id="modlgn-passwd" name='password' class="form-control" placeholder="Password" required>{printMsg key='loginpassword'}
                                </div>
                                <div class="form-group">
                                <button type='submit' name='submit' id='_submit' class="btn btn-lg btn-primary btn-block">{!login_button!}</button>
                                </div>
                              </form>
                              <div class="cleared"></div>
                              <div id="form-group">
                                <p><a onclick='showDialog(this);return false;' href='forgot_password.php'>Forgot your password?</a></p>
                                <p>New to Fusion Ticket? <a href='index.php?action=register'>Join us.</a></p>
                              </div>
                          </div>
                        </form>
{/if}