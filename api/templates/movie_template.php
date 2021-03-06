{ "collection" :
  {
    "version" : "1.0",
    "href" : "{{ url }}",
    
    "links" : [
      {"rel" : "profile" , "href" : "http://schema.org/Movie"},
      {"rel" : "collection", "href" : "{{ url }}/../../movies"},
      {"rel" : "collection", "href" : "{{ url }}/../../books"},
      {"rel" : "collection", "href" : "{{ url }}/../../musicalbums"},
      {"rel" : "collection", "href" : "{{ url }}/../../videogames"}
    ],
    
    "items" : [
      {
        "href" : "{{ url }}",
        "data" : [
          {"name" : "name", "value" : "{{ item.name }}", "prompt" : "Nombre de la película"},
	  {"name" : "description", "value" : "{{ item.description }}", "prompt" : "Descripción de la película"},
	  {"name" : "director", "value" : "{{ item.director }}", "prompt" : "Director de la película"},
	  {"name" : "datePublished", "value" : "{{ item.datePublished }}", "prompt" : "Fecha de lanzamiento"},
	  {"name" : "embedUrl", "value" : "{{ item.embedUrl }}", "prompt" : "Trailer en Youtube"}
        ]
      } 
  
    ],
    
    
    "template" : {
      "data" : [
        {"name" : "name", "value" : "{{ item.name }}", "prompt" : "Nombre de la película"},
	  {"name" : "description", "value" : "{{ item.description }}", "prompt" : "Descripción de la película"},
	  {"name" : "director", "value" : "{{ item.director }}", "prompt" : "Director de la película"},
	  {"name" : "datePublished", "value" : "{{ item.datePublished }}", "prompt" : "Fecha de lanzamiento"},
	  {"name" : "embedUrl", "value" : "{{ item.embedUrl }}", "prompt" : "Trailer en Youtube"}
      ]
    }
  } 
}




