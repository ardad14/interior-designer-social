FROM arangodb:3.10

RUN mkdir -p /docker-entrypoint-initdb.d/ && \
    echo "db._createDatabase('social', {}, [{ username: 'root', passwd: 'root', active: true}]);" > /docker-entrypoint-initdb.d/arangodb.js && \
    echo "db._createDatabase('social_test', {}, [{ username: 'root', passwd: 'root', active: true}]);" > /docker-entrypoint-initdb.d/arangodb_test.js
