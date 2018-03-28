const chatStyles = {
  root: {
    transition: 'all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms',
    width: '100%',
    paddingTop: 50,
    boxSizing: 'border-box',
    paddingBottom: 50,
  },
  root230: {
    transition: 'all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms',
    width: '100%',
    paddingTop: 50,
    boxSizing: 'border-box',
    paddingBottom: 230,
  },
  rootShowMore: {
    transition: 'all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms',
    width: '100%',
    paddingTop: 50,
    boxSizing: 'border-box',
    paddingBottom: 145,
  },
  toolBar: {
    position: 'fixed',
    bottom: 0,
    width: '100%',
    height: 'auto',
    boxShadow: '0 0 1px 1px #ebebeb',
    backgroundColor: '#f0f0f0',
  },
  toolBarBotton: {
    display: 'flex',
    width: '100%',
    height: 48,
    flexDirection: 'row',
    boxSizing: 'border-box',
    paddingRight: 12,
  },
  insertText: {
    flexGrow: 1,
    width: '100%',
    height: 48,
    boxSizing: 'border-box',
    paddingTop: 6,
    paddingRight: 4,
    paddingBottom: 6,
    paddingLeft: 12,
  },
  insertInput: {
    width: '100%',
    height: '100%',
    backgroundColor: '#e0e0e0',
    border: 'none',
    borderRadius: '8px',
    outline: 'none',
    fontSize: 18,
    fontWeight: 300,
    boxSizing: 'border-box',
    paddingRight: 6,
    paddingLeft: 6,
  },
  emoticon: {
    width: '100%',
    height: 180,
    overflow: 'hidden',
    overflowY: 'scroll',
    display: 'flex',
    flexWrap: 'wrap',
    backgroundColor: '#fff',
  }
};

export default chatStyles;