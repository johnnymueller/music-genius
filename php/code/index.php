<?php

require_once(__DIR__ . '/vendor/autoload.php');

// $authentication = new \Genius\Authentication\OAuth2(
//   '3z0AJ1FcR0BwQwzR6rP4JBBaqs-8j1HcTJ0Bi9YjZmIJz19zv1YH1Uoxkt-JQIAj',
//   '_JLWU5KX7qjKYEXeIByjzuhnFE47Z9RFvOAQb35CK7T9F2Wj_15GpXy9PP565SsvEWQgwUAu7YFVrXi4cZD4oQ',
//   'http://cleave.co/music-genius',
//   new \Genius\Authentication\Scope([
//       \Genius\Authentication\Scope::SCOPE_ME,
//       \Genius\Authentication\Scope::SCOPE_CREATE_ANNOTATION,
//       \Genius\Authentication\Scope::SCOPE_MANAGE_ANNOTATION,
//       \Genius\Authentication\Scope::SCOPE_VOTE,
//   ]),
//   null
// );

// if (isset($_GET[ 'code' ])) {
//     $authentication->refreshToken($_GET[ 'code' ]);
// } else {
//     // read access token you got for user from your database or redirect him
//     if (!$accessTokenFromDatabase) {
//         header('Location: ' . $oauth->getAuthUrl());
//     } else {
//         $oauth->setAccessToken($accessTokenFromDatabase);
//     }
// }
$geniusphp = new \Genius\Genius('pjYmXFtkjNmLtWweVn_vUT0KU50jGRuP0DSSJ_NUhTSfGQWgkiyrBYnC3F2hCcJ9');

// let's search for the most popular song on Genius for Kendrick Lamar
$search = $geniusphp->search->get('Kendrick Lamar')->response->hits[0]->result->id;

// and get everything about that song
$song = $geniusphp->songs->get( $search );
print_r($song);
exit;

$genius = new \Genius\Genius($authentication);
// print_r($genius);
// exit;

$upvoteAnnotation = $genius->getAnnotationsResource()->upvote(11852248);
print_r($upvoteAnnotation);
exit;

// let's search for the most popular song on Genius for Kendrick Lamar
$search = $genius->search->get('Kendrick Lamar')->response->hits[0]->result->id;
print_r($search);
exit;

// and get everything about that song
$song = $genius->songs->get( $search );

print_r($song);
