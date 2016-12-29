FROM step_1

RUN apt-get install -y vim
RUN mkdir /home/test_nlpf
COPY ./ /home/test_nlpf/
COPY config/default /etc/nginx/sites-available/default
RUN service nginx restart
