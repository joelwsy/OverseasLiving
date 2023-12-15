+++
title = '{{ replace .File.ContentBaseName "-" " " | title }}'
date = {{ .Date }}
draft = true

topic = "{{ replace .File.Dir "/" "" }}" 
+++
