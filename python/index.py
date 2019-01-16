import lyricsgenius
genius = lyricsgenius.Genius("pjYmXFtkjNmLtWweVn_vUT0KU50jGRuP0DSSJ_NUhTSfGQWgkiyrBYnC3F2hCcJ9")
artist = genius.search_artist("Andy Shauf", max_songs=3)
print(artist.songs)

# Search for a single song by the same artist:
song = genius.search_song("To You", artist.name)
print(song.lyrics)

# Add the song to the artist object:
# artist.add_song(song)

# Save the artist's songs to a JSON file:
artist.save_lyrics()

# There are various options configurable as parameters within the Genius class:
# genius.verbose = False # Turn off status messages
# genius.remove_section_headers = True # Remove section headers (e.g. [Chorus]) from lyrics when searching
# genius.skip_non_songs = False # Include hits thought to be non-songs (e.g. track lists)
# genius.excluded_terms = ["(Remix)", "(Live)"] # Exclude songs with these words in their title

# You can also call the package from the command line:

# export GENIUS_CLIENT_ACCESS_TOKEN="my_client_access_token_here"
# python3 -m lyricsgenius --help

# Search for and save lyrics to a given song:
# python3 -m lyricsgenius song "Begin Again" "Andy Shauf" --save
# Search for five songs by 'The Beatles' and save the lyrics:
