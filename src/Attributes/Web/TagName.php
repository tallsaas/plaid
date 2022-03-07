<?php

namespace Obsidian\Attributes\Web;

enum TagName {
  case A;          //	Specifies an anchor
  case Abbr;       //	Specifies an abbreviation
  case Acronym;    //	Deprecated:Specifies an acronym
  case Address;    //	Specifies an address element
  case Applet;     //	Deprecated: Specifies an applet
  case Area;       //	Specifies an area inside an image map
  case Article;    //	New Tag: Specifies an independent piece of content of a document, such as a blog entry or newspaper article
  case Aside;      //	New Tag:Specifies a piece of content that is only slightly related to the rest of the page.
  case Audio;      //	New Tag:Specifies an audio file.
  case B;    //	Specifies bold text
  case Base;       //	Specifies a base URL for all the links in a page
  case Basefont;   //	Deprecated: Specifies a base font
  case Bdo;        //	Specifies the direction of text display
  case Bgsound;    //	Specifies the background music
  case Big;    //	Deprecated:Specifies big text
  case Blink;    //	Specifies a text which blinks
  case Blockquote;    //	Specifies a long quotation
  case Body;    //	Specifies the body element
  case Br;    //	Inserts a single line break
  case Button;    //	Specifies a push button
  case Canvas;    //	New Tag:This is used for rendering dynamic bitmap graphics on the fly, such as graphs or games.
  case Caption;    //	Specifies a table caption
  case Center;    //	Deprecated: Specifies centered text
  case Col;    //	Specifies attributes for table columns 
  case Colgroup;    //	Specifies groups of table columns
  case Command;    //	New Tag:Specifies a command the user can invoke.
  case Comment;    //	Puts a comment in the document
  case Datalist;    //	New Tag:Together with the a new list attribute for input can be used to make comboboxes
  case Dd;    //	Specifies a definition description
  case Del;    //	Specifies deleted text
  case Details;    //	New Tag:Specifies additional information or controls which the user can obtain on demand.
  case Dir;    //	Deprecated: Specifies a directory list
  case Div;    //	Specifies a section in a document
  case Dl;    //	Specifies a definition list
  case Dt;    //	Specifies a definition term
  case Embed;    //	New Tag:Defines external interactive content or plugin.
  case Fieldset;    //	Specifies a fieldset
  case Figure;    //	New Tag:Specifies a piece of self-contained flow content, typically referenced as a single unit from the main flow of the document.
  case Small;    //	Specifies small text
  case Tt;    //	Deprecated:Specifies teletype text
  case font;    //	Deprecated: Specifies text font, size, and color
  case footer;    //	New Tag:Specifies a footer for a section and can contain information about the author, copyright information, et cetera.
  case form;    //	Specifies a form 
  case frame;    //	Deprecated:Specifies a sub window (a frame)
  case frameset;    //	Deprecated:Specifies a set of frames
  case head;    //	Specifies information about the document
  case header;    //	New Tag:Specifies a group of introductory or navigational aids.
  case hgroup;    //	New Tag:Specifies the header of a section.
  case H1;    //	Specifies header 1
  case H2;    //	Specifies header 2
  case H3;    //	Specifies header 3
  case H4;    //	Specifies header 4
  case H5;    //	Specifies header 5
  case H6;    //	Specifies header 6
  case Hr;    //	Specifies a horizontal rule
  case Html;    //	Specifies an html document
  case I;    //	Specifies italic text
  case Isindex;    //	Deprecated: Specifies a single-line input field
  case Iframe;    //	Specifies an inline sub window (frame)
  case Ilayer;    //	Specifies an inline layer
  case Img;    //	Specifies an image
  case Input;    //	Specifies an input field
  case Ins;    //	Specifies inserted text
  // case keygen;    //	New Tag:Specifies control for key pair generation.
  // case keygen;    //	Generate key information in a form
  // case label;    //	Specifies a label for a form control
  // case layer;    //	Specifies a layer
  // case legend;    //	Specifies a title in a fieldset
  // case li;    //	Specifies a list item
  // case link;    //	Specifies a resource reference
  // case map;    //	Specifies an image map 
  // case mark;    //	New Tag:Specifies a run of text in one document marked or highlighted for reference purposes, due to its relevance in another context.
  // case marquee;    //	Create a scrolling-text marquee
  // case menu;    //	Deprecated: Specifies a menu list
  // case meta;    //	Specifies meta information
  // case meter;    //	New Tag:Specifies a measurement, such as disk usage.
  // case multicol;    //	Specifies a multicolumn text flow
  // case nav;    //	New Tag:Specifies a section of the document intended for navigation.
  // case nobr;    //	No breaks allowed in the enclosed text
  // case noembed;    //	Specifies content to be presented by browsers that do not support the case embed;    //tag
  // case noframes;    //	Deprecated:Specifies a noframe section
  // case noscript;    //	Specifies a noscript section
  // case object;    //	Specifies an embedded object
  // case ol;    //	Specifies an ordered list
  // case optgroup;    //	Specifies an option group
  // case option;    //	Specifies an option in a drop-down list
  // case output;    //	New Tag:Specifies some type of output, such as from a calculation done through scripting.
  // case p;    //	Specifies a paragraph
  // case param;    //	Specifies a parameter for an object
  // case cite;    //	Specifies a citation
  // case code;    //	Specifies computer code text
  // case dfn;    //	Specifies a definition term
  // case em;    //	Specifies emphasized text 
  // case kbd;    //	Specifies keyboard text
  // case samp;    //	Specifies sample computer code
  // case strong;    //	Specifies strong text
  // case var;    //	Specifies a variable
  // case plaintext;    //	Deprecated: Render the raminder of the document as preformatted plain text
  // case pre;    //	Specifies preformatted text
  // case progress;    //	New Tag:Specifies a completion of a task, such as downloading or when performing a series of expensive operations.
  // case q;    //	Specifies a short quotation
  // case ruby;    //	New Tag:Together with case rt;    // and case rp;    // allow for marking up ruby annotations.
  // case script;    //	Specifies a script
  // case section;    //	New Tag:Represents a generic document or application section.
  // case select;    //	Specifies a selectable list
  // case spacer;    //	Specifies a white space
  // case span;    //	Specifies a section in a document
  // case s;    //	Deprecated: Specifies strikethrough text
  // case strike;    //	Deprecated: Specifies strikethrough text
  // case style;    //	Specifies a style definition
  // case sub;    //	Specifies subscripted text
  // case sup;    //	Specifies superscripted text
  // case table;    //	Specifies a table
  // case tbody;    //	Specifies a table body
  // case td;    //	Specifies a table cell
  // case textarea;    //	Specifies a text area
  // case tfoot;    //	Specifies a table footer
  // case th;    //	Specifies a table header
  // case thead;    //	Specifies a table header
  // case time;    //	New Tag:Specifies a date and/or time.
  // case title;    //	Specifies the document title
  // case tr;    //	Specifies a table row
  // case u;    //	Deprecated: Specifies underlined text
  // case ul;    //	Specifies an unordered list
  // case video;    //	New Tag:Specifies a video file.
  // case wbr;    //	New Tag:Specifies a line break opportunity.
  // case wbr;    //	Indicate a potential word break point within a case nobr;    // section
  // case xmp;    //	Deprecated: Specifies preformatted text
}