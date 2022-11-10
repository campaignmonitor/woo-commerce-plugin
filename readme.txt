=== Campaign Monitor for WooCommerce ===
Contributors: vibhorchhabra
Donate link: N/A
Tags: Campaign Monitor, Email Marketing, Subscription, Personalization
Requires at least: 4.0.1
Tested up to: 6.1
Stable tag: 1.5.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Easily subscribe customers to your Campaign Monitor mailing list at checkout.

== Description ==
Campaign Monitor for WooCommerce allows your customers to be added to a list in your [campaignmonitor.com](https://www.campaignmonitor.com?utm_source=woocommerce-plugin&utm_medium=referral) account at checkout.

Get started with pre-packaged segments. Once connected with your Campaign Monitor account, you’ll automatically be set up with segments, which help you target smaller groups of subscribers:

* High Spending Customers — Keep your biggest spenders engaged and spending with you, perhaps by offering them an exclusive promotion.
* Repeat Customers — Recognize and reward your loyal customers with a unique email offer.
* First-time Customers — Welcome each new customer in a personalized way, and perhaps offer them a discount on their second purchase.
* Newsletter Subscribers — Immediately add all newsletter subscribers to a list in your campaignmonitor.com account.

== What is Campaign Monitor? ==
Campaign Monitor makes it radically easy to create, send and measure the impact of your email marketing campaigns. **Don’t have a Campaign Monitor account? [Sign up for free](https://www.campaignmonitor.com/signup?utm_source=woocommerce-plugin&utm_medium=referral)**.

== Installation ==
1. Log in to your WordPress Admin and go to the Plugins section.
2. Click “Add New” and search for “Campaign Monitor for WooCommerce.”
3. From the search results, install and activate our plugin.
4. In the sidebar, click “Subscribe at checkout” and then “Connect.”
5. Follow the steps and connect it to your Campaign Monitor account.
6. Once connected, you will return to the plugin settings page. Now select or create the list where you want your customers to sign up when checking out. You’ll automatically be set up with segments which help you target smaller groups of subscribers.

= Updating from 1.3.2 and earlier =
PHP 7 introduced connectivity issues between our plugin and Campaign Monitor when the WordPress site is not running on HTTPS. We are unable to resolve this problem with a regular update from your Admin. If you are experiencing this problem, you will need to disconnect, delete the plugin and install the latest version. We apologize for the inconvenience.

== Frequently Asked Questions ==
= Why am I unable to use the Confirmed opt-in list for this plugin?
- If the list has the "Confirmed opt-in" setting enabled, new customers (determined by their email address) will be sent a confirmation email with a link to validate their email address before being added to the list. This would happen even if they did not select the subscription option at checkout. To prevent this from happening, we had disable selecting Confirmed opt-in list to be used for this plugin.

= Would my list still be clean if I am using Single opt-in list?
- Given that the email address is used in the checkout process, it is most likely that valid email address is being used and therefore your list should still be clean.

= Who is subscribed to my list with this plugin? =
- Customers that have been through the checkout process in your WooCommerce store are added to the list that you have configured. This enables basic analytics to be calculated around high-spender / repeat customers.  
- If you have enabled the setting "Show subscription option at checkout" AND the customer chooses to opt-in to this at checkout, the customer would also be added to the "WooCommerce Newsletter Subscribers" segment in your list. 

= Does this plugin send an email to my customers?
- This plugin does not send any emails. You would need to either send an email manually or have email automation set up in the Campaign Monitor platform. 

= Do I need a Campaign Monitor account to use this plugin? =
Yes, you do ([sign up here](https://www.campaignmonitor.com/?utm_source=woocommerce-plugin&utm_medium=referral)).

== Screenshots ==

1.	Setting up WooCommerce/Campaign Monitor integration
2.	Pre-Packaged segments based on customer order history in Campaign Monitor

== Changelog ==

= 1.5.0 =
* Change to disable the use of Confirmed opt-in List for this plugin. Please check your setting that you have the correct list type.
* Added FAQ to explain why Confirmed opt-in List is not suitable for this plugin.
* Also when creating a new list, remove the ability to select the list type (Single opt-in or Confirmed opt-in). This would now always default to Single opt-in.
* Tested in Wordpress 6.1
= 1.4.9 =
= 1.4.8 =
* Minor fixes for PHP8
= 1.4.7 =
* Tested in Wordpress 5.6.
= 1.4.6 =
* Further increase connection time before timing out
= 1.4.5 =
* Increase connection time before timing out
* Sanitize only required fields during check-out 
= 1.4.4 =
* Minor Fixes for Wordpress 5.5
= 1.4.3 =
* Fixed issue when connecting with empty-client account at Campaign Monitor
= 1.4.2 =
* Moved the subscribe checkbox before the place order button
= 1.4.1 =
* Resolve intermittent connection issues
= 1.4.0 =
* Resolve the connectivity issue on HTTP for PHP7.
* Admin navigation item renamed to "Subscribe at checkout".
* Improved security.
* Tested in Wordpress 5.2.3.
= 1.3.2 =
* Resolve some conflicts with Campaign Monitor Forms plugin
= 1.3.1 =
* UI patch for subscription button.
= 1.3.0 =
* Maintenance update.
* Optimization update for large amounts of orders.
= 1.2.9 =
* Maintenance update.
* Lock system for cron jobs updated
= 1.2.8 =
* Maintenance update.
= 1.2.7 =
* Fix connect class.
= 1.2.6 =
* Fix file name.
= 1.2.5 =
* Fix folder name.
= 1.2.4 =
= 1.2.3 =
= 1.2.2 =
= 1.2.1 =
= 1.2.0 =
= 1.1.0 =
= 1.0.0 =
* Launched Campaign Monitor for WooCommerce plugin.


















