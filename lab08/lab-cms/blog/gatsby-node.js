const path = require(`path`);
const makeRequest = (graphql, request) => new Promise((resolve, reject) => {  
  resolve(
    graphql(request).then(result => {
      if (result.errors) {
        reject(result.errors)
      }
      return result;
    })
  )
});

exports.createPages = ({ boundActionCreators, graphql }) => {  
  const { createPage } = boundActionCreators;

  const getPosts = makeRequest(graphql, `
    {
      allStrapiPosts {
        edges {
          node {
            id
          }
        }
      }
    }
    `).then(result => {
    result.data.allStrapiPosts.edges.forEach(({ node }) => {
      createPage({
        path: `/${node.id}`,
        component: path.resolve(`src/pages/post.js`),
        context: {
          id: node.id,
        },
      })
    })
  });

  const getAuthors = makeRequest(graphql, `
    {
      allStrapiAuthors {
        edges {
          node {
            id
          }
        }
      }
    }
    `).then(result => {
    result.data.allStrapiAuthors.edges.forEach(({ node }) => {
      createPage({
        path: `/${node.id}`,
        component: path.resolve(`src/pages/author.js`),
        context: {
          id: node.id,
        },
      })
    })
  });

return Promise.all([
    getPosts,
    getAuthors
  ])
};

