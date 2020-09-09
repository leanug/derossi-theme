/**
 * Tippy popover
 */

 import tippy from 'tippy.js'

 const socialLinks = document.querySelectorAll( '#menu-social-menu > li > a' );

 socialLinks.forEach( item => {
   item.addEventListener( "click", e => {
     e.preventDefault();
   });
 });

 tippy( socialLinks, {
   content: 'Thanks for visiting my website, it is a sample website for my portfolio, social links are not functional.',
   arrow: true
 })
